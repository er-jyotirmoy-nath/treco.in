<?php

require_once $_SERVER["DOCUMENT_ROOT"].'/web-admin/admin/connections/smotik_con.php';

class getContent {
    public function blogDetail($param) {
        $bdd = smotik_db::getInstance();
        $temp = array();
        $sql = "SELECT `id`, `title`, `image_url`, `content_blog` as content, `visible` FROM `blogs_table` WHERE id = '$param'";
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
}

$getCont = new getContent();
$data = json_decode(file_get_contents('php://input'),true);
if(isset($data["get_det"]) && $data["get_det"] == "news" && isset($data["id"])){
    $getCont->getNewsById($data["id"]);
}
if(isset($data["get_det"]) && $data["get_det"] == "blogs" && isset($data["id"])){
    $getCont->blogDetail($data["id"]);
}