<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of content_class
 *
 * @author jyoti
 */
require_once $_SERVER["DOCUMENT_ROOT"] . '/web-admin/admin/connections/smotik_con.php';

class content_class extends smotik_db {

    public function __construct() {
        
    }

    //put your code here
    public function saveContent($subtitle, $content, $section) {
        $bdd = smotik_db::getInstance();
        $allowedTags = '<p><strong><em><u><h1><h2><h3><h4><h5><h6><img>';
        $allowedTags .= '<li><ol><ul><span><div><br><ins><del>';

        $sContent = strip_tags(stripslashes($content), $allowedTags);

        $subtitle = $subtitle;
        $sql_count = "SELECT COUNT(*) FROM `home_content_table` WHERE section = '$section'";
        $query_count = $bdd->prepare($sql_count);
        $query_count->execute();
        $count = $query_count->fetchColumn();

        if ($count > 0) {
            try {
                $sql = "UPDATE `home_content_table` SET `content`=:content, `sub_content` = '$subtitle'"
                        . "  WHERE `section` = '$section'";
                //echo $sql;
                $query = $bdd->prepare($sql);
                $query->bindParam(":content", $sContent);

                if ($query->execute()) {
                    echo "Done";
                }
            } catch (Exception $exc) {
                echo $exc->getTraceAsString();
            }
        } else {
            try {
                $sql = "INSERT INTO `home_content_table`(`section`, `content`, `sub_content`) VALUES ('$section',:content,'$subtitle')";
                $query = $bdd->prepare($sql);
                $query->bindParam(":content", $sContent);
                if ($query->execute()) {
                    echo "Done";
                }
            } catch (Exception $exc) {
                echo $exc->getTraceAsString();
            }
        }
    }

    public function getContent($section) {
        $bdd = smotik_db::getInstance();
        $temp = array();
        $sql = "SELECT `homeid`, `section`, `content`, `sub_content` FROM `home_content_table` WHERE `section` = '$section'";
        $query = $bdd->prepare($sql);
        $query->execute();
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            $temp["subtitle"] = $row["sub_content"];
            $temp["content"] = ($row["content"]);
        }
        echo json_encode($temp);
    }

}
