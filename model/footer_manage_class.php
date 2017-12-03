<?php 

//session_start();
require_once 'aboutus_model.php';
/**
* 
*/
class footerName extends aboutus_model
{
	
	
}
$newfoter = new footerName();
$newfoter->getAboutUs();
$data = json_decode(file_get_contents("php://input"),true);
print_r($data);
if(isset($data["getdata"])){
	echo "string";
	$newfoter->getAboutUs();
}