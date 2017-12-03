<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
require_once $_SERVER["DOCUMENT_ROOT"].'/web-admin/admin/connections/smotik_con.php';

class News_class  {

    public function newsUpload($data, $image) {
        try {
            $bdd = smotik_db::getInstance();
            $title = $data ["headline"];
            $content = $data ["content"];
            $isvisible = $data ["visibility"];
            $target_dir = "images/";
            $target_file = $_SERVER["DOCUMENT_ROOT"].'/web-admin/admin/'.$target_dir . basename($image ["image"] ["name"]);
            $target_file_1 = $target_dir . basename($image ["image"] ["name"]);
            $uploadOk = 1;
            $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
            // Check if image file is a actual image or fake image
            if (isset($image ["image"] ["tmp_name"])) {
                if (isset($title)) {
                    $check = getimagesize($image ["image"] ["tmp_name"]);
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
                if ($image ["image"] ["size"] > 500000000) {
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
                    if (move_uploaded_file($image ["image"] ["tmp_name"], $target_file)) {
                        echo "The file " . basename($image ["image"] ["name"]) . " has been uploaded.";
                    } else {
                        echo "Sorry, there was an error uploading your file.";
                        die();
                    }
                }
            }
            $date_news = date('d-m-Y', strtotime('now'));
            
                $sql = "INSERT INTO `news_table`(`title`, `image_url` , `content`, `visible`, `date_news`) 
                VALUES (:title,:image_url,:content,:visible,:date_news)";
                
            $query = $bdd->prepare($sql);
            $query->bindParam(':title',$title);
            $query->bindParam(':image_url',$target_file_1);
            $query->bindParam(':content',$content);
            $query->bindParam(':visible',$isvisible);
            $query->bindParam(':date_news',$date_news);
            
            $query->execute();
            if ($query->rowCount()) {
                $this->getNews();
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function getNews() {
        $bdd = smotik_db::getInstance();
        $response_str = '';
        $sql = "SELECT * FROM `news_table`";
        $query = $bdd->prepare($sql);
        $query->execute();
        echo json_encode($query->fetchAll(PDO::FETCH_ASSOC));

    }
    
    public function getNewsById($id) {
        $bdd = smotik_db::getInstance();
        $response_str = '';
        $sql = "SELECT * FROM `news_table` where id = :id";
        $query = $bdd->prepare($sql);
        $query->bindParam(':id',$id);
        $query->execute();
        echo json_encode($query->fetchAll(PDO::FETCH_ASSOC));

    }
    public function deleteNews($param) {
        $bdd = smotik_db::getInstance();
        $sql = "DELETE FROM `news_table` WHERE id = '$param'";
        $query = $bdd->prepare($sql);
        $query->execute();
        if ($query->rowCount()) {
            echo "Done";
        }
    }

}

$new_news = new News_class();
$data = file_get_contents('php://input');
$json = json_decode($data,true);

if (isset($_POST["headline"]) && isset($_POST["content"]) && isset($_POST["visibility"])) {
    $new_news->newsUpload($_POST, $_FILES);
}
if (isset($json["getnews"]) && $json["getnews"] == "get") {
    $new_news->getNews();
}
if(isset($_POST["delete_news"]) && isset($_POST["news_id"])){
    $param = $_POST["news_id"];
    $new_news->deleteNews($param);
}

if(isset($_POST["getnewsdetails"]) && isset($_POST["news_id"])){
    $id = $_POST["news_id"];
    $new_news->getNewsById($id);
}