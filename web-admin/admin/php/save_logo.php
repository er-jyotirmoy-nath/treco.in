<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of save_logo
 *
 * @author jyoti
 */
session_start();
require_once $_SERVER["DOCUMENT_ROOT"].'/web-admin/admin/connections/smotik_con.php';
class save_logo {
    //put your code here
    public function logoUpload($image) {
        try {
            
            $target_dir = "images/";
            $target_file = $_SERVER["DOCUMENT_ROOT"].'/web-admin/admin/'.$target_dir . basename($image ["logo_image"] ["name"]);
            $target_file_1 = $target_dir . basename($image ["logo_image"] ["name"]);
            $uploadOk = 1;
            $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
            // Check if image file is a actual image or fake image
            if (isset($image ["logo_image"] ["tmp_name"])) {                
                    $check = getimagesize($image ["logo_image"] ["tmp_name"]);
                    if ($check !== false) {
                        echo "File is an image - " . $check ["mime"] . ".";
                        $uploadOk = 1;
                    } else {
                        echo "File is not an image.";
                        die();
                        $uploadOk = 0;
                    }
                if ($image ["logo_image"] ["size"] > 500000000) {
                    echo "Sorry, your file is too large.";
                    die();
                    $uploadOk = 0;
                }
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
                    if (move_uploaded_file($image ["logo_image"] ["tmp_name"], $target_file)) {
                        echo "The file " . basename($image ["logo_image"] ["name"]) . " has been uploaded.";
                    } else {
                        echo "Sorry, there was an error uploading your file.";
                        die();
                    }
                }
            }
           
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

}

if(isset($_FILES["logo_image"])){
    $new_save = new save_logo();
    $new_save->logoUpload($_FILES);
}