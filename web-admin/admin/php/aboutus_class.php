<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of aboutus_class
 *
 * @author jyoti
 */
session_start();
require_once $_SERVER["DOCUMENT_ROOT"].'/web-admin/admin/model/content_class.php';

class aboutus_class extends content_class  {
    
   public function __construct() {
       parent::__construct();
   }
    

}

$new_about_content = new aboutus_class();
if (isset($_POST["subtitle"]) && isset($_POST["about_content"]) && $_POST["set_content"] == "save") {
    
    $subtitle = $_POST["subtitle"];
    $content = $_POST["about_content"];
    $new_about_content->saveContent($subtitle, $content, 'about_us');
}
if(isset($_POST["get_content"])){
    $new_about_content->getContent('about_us');
}