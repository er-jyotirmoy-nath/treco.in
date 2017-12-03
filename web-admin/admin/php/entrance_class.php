<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of entrance_class
 *
 * @author jyoti
 */
session_start();
require_once $_SERVER["DOCUMENT_ROOT"] . '/web-admin/admin/model/content_class.php';

class entrance_class extends content_class {

    //put your code here
    public function __construct() {
        ;
    }

    private function reArrayFiles(&$file_post) {

        $file_ary = array();
        $file_count = count($file_post['name']);
        $file_keys = array_keys($file_post);

        for ($i = 0; $i < $file_count; $i++) {
            foreach ($file_keys as $key) {
                $file_ary[$i][$key] = $file_post[$key][$i];
            }
        }

        return $file_ary;
    }

    public function UploadSection($data, $image) {

        $bdd = smotik_db::getInstance();
        $subtitle = $data ["solution_text"];
        $sContent = $data ["solution_content"];
        $allowedTags = '<p><strong><em><u><h1><h2><h3><h4><h5><h6><img>';
        $allowedTags .= '<li><ol><ul><span><div><br><ins><del>';
        $sContent = strip_tags(stripslashes($sContent), $allowedTags);        
        $section = $data ["section"];
        $target_dir = "images/";
        $target_file = $_SERVER["DOCUMENT_ROOT"] . '/web-admin/admin/' . $target_dir . basename($image ["section_image"] ["name"]);
        $target_file_1 = $target_dir . basename($image ["section_image"] ["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
        // Check if image file is a actual image or fake image
        if (isset($image ["section_image"] ["tmp_name"])) {
            if (isset($title)) {
                $check = getimagesize($image ["section_image"] ["tmp_name"]);
                if ($check !== false) {
                    echo "File is an image - " . $check ["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    echo "File is not an image.";
                    die();
                    $uploadOk = 0;
                }
            }
            // Check if file already exists
            // Check file size
            if ($image ["section_image"] ["size"] > 500000000) {
                echo "Sorry, your file is too large.";
                die();
                $uploadOk = 0;
            }
            // Allow certain file formats
            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $imageFileType != "JPG") {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                die();
                $uploadOk = 0;
            }
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
                die();
                // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($image ["section_image"] ["tmp_name"], $target_file)) {
                    echo "The file " . basename($image ["section_image"] ["name"]) . " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                    die();
                }
            }
        }
        $date_news = date('d-m-Y', strtotime('now'));
        $sql_count = "SELECT COUNT(*) FROM `home_content_table` WHERE section = '$section'";
        $query_count = $bdd->prepare($sql_count);
        $query_count->execute();
        $count = $query_count->fetchColumn();
        if ($count > 0) {
            try {
                $sql = "UPDATE `home_content_table` SET `content`=:content, `sub_content` = '$subtitle', `image_1` = '$target_file_1'"
                        . "  WHERE `section` = '$section'";
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
                $sql = "INSERT INTO `home_content_table`(`section`, `content`, `sub_content`, `image_1`) "
                        . "VALUES ('$section',:content,'$subtitle','$target_file_1')";
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

    public function getUsecases() {
        $bdd = smotik_db::getInstance();
        $response_str = '';
        $sql = "Select * from entrance_mgmt_usecase";
        $query = $bdd->prepare($sql);
        $query->execute();
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {

            $response_str .= '<tr><td>' . $row["id"] . '</td>';
            $response_str .= '<td>' . $row["title"] . '</td>';
            $response_str .= '<td>' . $row["content"] . '</td>';
            $response_str .= '<td><img src="' . $row["image_url"] . '" style="width:20px;height:20px;"/></td>';
            $response_str .= '<td><a id="del_banner" data-id="' . $row["id"] . '"><i class="glyphicon glyphicon-trash"></i></a></td></tr>';
        }
        echo $response_str;
    }

}

$new_entrance_content = new entrance_class();

if (isset($_POST["solution_text"]) && isset($_POST["solution_content"]) && isset($_POST["section"])) {


    $new_entrance_content->UploadSection($_POST, $_FILES);
}

if (isset($_POST["get_content"]) && isset($_POST["section"])) {
    $new_entrance_content->getContent($_POST["section"]);
}

if (isset($_POST["company_name"]) && isset($_POST["entrance_usecase_content"]) && isset($_POST["case_vis"])) {
    $new_entrance_content->uploadExample($_POST, $_FILES);
}
if (isset($_GET["load_usecases"])) {
    $new_entrance_content->getUsecases();
}