<?php

require_once $_SERVER["DOCUMENT_ROOT"].'/web-admin/admin/connections/smotik_con.php';
$bdd = smotik_db::getInstance();
$getdata = file_get_contents("php://input");
$json_data = json_decode($getdata,true);
if(isset($json_data["pname"]) && isset($json_data["pdesignation"]) && isset($json_data["ptestimonial"])){
    try{
     $tvisible = $json_data["tvisible"];
    $pname = $json_data["pname"];
    $pdesignation = $json_data["pdesignation"];
    $ptestimonial = $json_data["ptestimonial"];
    $sql  = "INSERT INTO `testimonials`(`person`, `designation`, `testimonial`, `visible`) 
    VALUES ('$pname','$pdesignation','$ptestimonial','$tvisible')";
    $query = $bdd->prepare($sql);
    $query->execute();
    if($query->rowCount() >0){
        echo "Done";
    }
    }
    catch(Exception $e){
        echo $e->getMesssage();
    }
   
}

if(isset($json_data["get_data"])){
    $sql = "SELECT `id`, `person`, `designation`, `testimonial`, `visible` FROM `testimonials`";
    $testimonial_response = '';
    $query = $bdd->prepare($sql);
    $query->execute();
    echo json_encode($query->fetchAll(PDO::FETCH_ASSOC));
    
}

if(isset($json_data["id"]) && isset($json_data["delete_test"])){
    //sprint_r($_POST);
    $id = $json_data["id"];
    $sql = "DELETE FROM testimonials where id = '$id' ";
    $query = $bdd->prepare($sql);
    $query->execute();
    if($query->rowCount()>0){
        echo "Done";
    }
}
