<?php
include_once $_SERVER["DOCUMENT_ROOT"].'/web-admin/admin/php/blogs_man_class.php';

$data = file_get_contents("php://input");

$json_data = json_decode($data,true);

if(isset($json_data["get_blogs"])){
  $new_blog->getBlogs();
}

if(isset($json_data["blogs_id"])){
  $param = $json_data["blogs_id"];
  $new_blog->blogDetail($param);
}

if(isset($json_data["delete_id"])){
    $param = $json_data["delete_id"];
    $new_blog->deleteBlog($param);
}
 ?>
