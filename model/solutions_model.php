<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of solutions_model
 *
 * @author jyoti
 */
session_start();
require_once $_SERVER["DOCUMENT_ROOT"].'/web-admin/admin/connections/smotik_con.php';
class solutions_model {
    //put your code here
    public function getEntrancePage($section) {
        $bdd = smotik_db::getInstance();
        
        $content = '';
        $sql = "SELECT * FROM `home_content_table` where section = '$section' limit 0,1";
        $query = $bdd->prepare($sql);
        $query->execute();
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            $content .= '<h2 class="page-header chdg">'.$row["sub_content"].'</h2>';
            $content .='<div class="col-md-12 abt-txt">'. $row["content"].'<br></div>';
            
        }
        echo $content;
        
    }
    public function getCustomerServicePage($section) {
        $bdd = smotik_db::getInstance();
        
        $content = '';
        $sql = "SELECT * FROM `home_content_table` where section = '$section' limit 0,1";
        $query = $bdd->prepare($sql);
        $query->execute();
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            
            $content .='<div class="col-md-6 abt-txt">'. $row["content"].'<br></div>';
            
        }
        echo $content;
        
    }
    public function getProducts() {
        $bdd = smotik_db::getInstance();
        
        $content = '';
        $sql = "SELECT * FROM products_table where visible = '1' and section = 'entrance' ";
        $query = $bdd->prepare($sql);
        $query->execute();
        $j = 1;
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            if($j==1){$content .= '<div class="row">';}
            $content .='<div class="col-md-6 img-portfolio">
                        <a href="#"><img class="img-responsive img-hover" src="web-admin/admin/'.$row["image_url"].'" alt=""></a>
                        <h3>'.$row["title"].'</h3>
                        '.$row["content"].'
                    </div>';
            $j++;
            if($j > 2){$content .='</div>';$j=1;}
            
            
        }
        echo $content;
    }
    public function getProdBanner($section) {
        $bdd = smotik_db::getInstance();
        $sql = "select image_1 FROM `home_content_table` where section = '$section' limit 0,1 ";
        $query = $bdd->prepare($sql);
        $query->execute();
        $temp["image"] = $query->fetchColumn();
        echo $temp["image"];
    }
}
$new_page = new solutions_model();

$data = json_decode(file_get_contents("php://input"),true);

if(isset($data["getbanner"]) && isset($data["section"])){
    $section = $data["section"];
    $new_page->getProdBanner($section);
}