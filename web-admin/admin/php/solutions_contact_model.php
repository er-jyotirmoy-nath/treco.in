<?php 
session_start();
$data = json_decode(file_get_contents("php://input"),true);
if(empty($_SESSION["selectedprods"]) && !isset($_SESSION["selectedprods"])){
	$temp = array();
	foreach ($data as $key => $value) {
		# code...
		$temp[] =  $key;
	}
	$_SESSION["selectedprods"] = $temp;
	print_r($_SESSION["selectedprods"]);
}
else{
	$temp = array();
	$temp = $_SESSION["selectedprods"];
	foreach ($data as $key => $value) {
		# code...
		if(!in_array($key, $temp)){
			$temp[] =  $key;
		}
		
	}
	$_SESSION["selectedprods"] = $temp;
	
}
