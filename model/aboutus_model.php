<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of aboutus_model
 *
 * @author jyoti
 */
//echo $_SERVER["DOCUMENT_ROOT"];
require_once $_SERVER["DOCUMENT_ROOT"].'/web-admin/admin/connections/smotik_con.php';
class aboutus_model {
    //put your code here
    public function getAboutUs() {
        $bdd = smotik_db::getInstance();
        $content = '';
        $sql = "SELECT * FROM `home_content_table` WHERE section = 'about_us'";
        $query = $bdd->prepare($sql);
        $query->execute();
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            $content .= $row["content"];
        }
        echo $content;
    }
}
$new_aboutus = new aboutus_model();