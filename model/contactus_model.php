<?php

//print_r($_POST);
$data = json_decode(file_get_contents("php://input"), true);
print_r($data);
$product_msg = "\r\n A Request Has been Recieved. Details are:- \r\n";
$product_msg.= "Name: ".$data["contactname"]."\r\n";
$product_msg.="Email Id: ".$data["contactemail"]."\r\n";
$product_msg.="Contact Number: ".$data["contactphone"]."\r\n";
$product_msg.="Message: ".$data["message"]."\r\n";

$sender = "jyotirmoy85@gmail.com";
$message = $product_msg;

// In case any of our lines are larger than 70 characters, we should use wordwrap()
$message = wordwrap($message, 70, "\r\n");

// Send
if(mail($sender, 'Lead Recieved from smotik', $message)){
	echo "Sent";
}