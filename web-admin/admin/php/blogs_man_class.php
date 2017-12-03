<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
require_once $_SERVER["DOCUMENT_ROOT"].'/web-admin/admin/connections/smotik_con.php';

class blogs_class  {

    public function blogUpload($data, $image) {
        try {
            $bdd = smotik_db::getInstance();
            $title = $data ["blog_title"];
            $content = $data ["text_blog"];
            $isvisible = $data ["blogs_vis"];
            $target_dir = "images/";
            $target_file = $_SERVER["DOCUMENT_ROOT"].'/web-admin/admin/'.$target_dir . basename($image ["blog_image"] ["name"]);
            $target_file_1 = $target_dir . basename($image ["blog_image"] ["name"]);
            $uploadOk = 1;
            $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
            // Check if image file is a actual image or fake image
            if (isset($image ["blog_image"] ["tmp_name"])) {
                if (isset($title)) {
                    $check = getimagesize($image ["blog_image"] ["tmp_name"]);
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
                if ($image ["blog_image"] ["size"] > 500000000) {
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
                    if (move_uploaded_file($image ["blog_image"] ["tmp_name"], $target_file)) {
                        echo "The file " . basename($image ["blog_image"] ["name"]) . " has been uploaded.";
                    } else {
                        echo "Sorry, there was an error uploading your file.";
                        die();
                    }
                }
            }
            $date_blog = date('d-m-Y', strtotime('now'));
            if ($data["entry_type"] == "save") {
                $sql = "INSERT INTO `blogs_table`(`title`, `image_url`, `content_blog`, `visible`, `date_blog`) "
                        . "VALUES (:title,:image_url,:content_blog,:visible,:date_blog)";
            } else if ($data["entry_type"] == "update") {
                $blog_id = $data["blog_id"];
                $sql = "UPDATE `blogs_table` SET `title`=:title,"
                        . "`image_url`=:image_url,"
                        . "`content_blog`=:content_blog,"
                        . "`visible`=:visible, "
                        . "`date_blog` = :date_blog "
                        . "WHERE `id` = '$blog_id'";
            }
            $query = $bdd->prepare($sql);
            $query->bindParam(":title",$title);
            $query->bindParam(":image_url",$target_file_1);
            $query->bindParam(":content_blog",$content);
            $query->bindParam(":visible",$isvisible);
            $query->bindParam(":date_blog",$date_blog);
            $query->execute();
            if ($query->rowCount() > 0) {
                echo "Done";
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function getBlogs() {
        $bdd = smotik_db::getInstance();
        $response_str = '';
        $sql = "SELECT * FROM `blogs_table`";
        $query = $bdd->prepare($sql);
        $query->execute();
        echo json_encode($query->fetchAll(PDO::FETCH_ASSOC));

    }

    public function blogDetail($param) {
        $bdd = smotik_db::getInstance();
        $temp = array();
        $sql = "SELECT `id`, `title`, `image_url`, `content_blog`, `visible` FROM `blogs_table` WHERE id = '$param'";
        $query = $bdd->prepare($sql);
        $query->execute();
        echo json_encode($query->fetchAll(PDO::FETCH_ASSOC));
    }

    public function deleteBlog($param) {
        $bdd = smotik_db::getInstance();
        $sql = "DELETE FROM `blogs_table` WHERE id = '$param'";
        $query = $bdd->prepare($sql);
        $query->execute();
        if ($query->rowCount() > 0) {
            echo "Done";
        }
    }

}

$new_blog = new blogs_class();

if (isset($_POST["blog_title"]) && isset($_POST["text_blog"]) && isset($_POST["blogs_vis"])) {
    $new_blog->blogUpload($_POST, $_FILES);
}
if (isset($_GET["load_blogs"])) {
    $new_blog->getBlogs();
}
if (isset($_GET["get_content"]) && isset($_GET["id"])) {
    $param = $_GET["id"];
    $new_blog->blogDetail($param);
}
if(isset($_POST["del_blog"]) && isset($_POST["blog_id"])){
    $param = $_POST["blog_id"];
    $new_blog->deleteBlog($param);
}
