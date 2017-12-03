<?php

//print_r($_POST);
$data = json_decode($_POST["selected_products"], true);
$product_msg = "\r\n The customer as shown interest for \r\n";
foreach ($data as  $value) {
	# code...
	$product_msg .= $value["prod_name"]."\r\n";
}
$sender = "jyotirmoy85@gmail.com";
$message = "A Lead has been recieved from".$_POST["contact_name"].
".\r\nWith email id ".$_POST["contact_email"]."\r\n and phone number".$_POST["contact_mobile"].$product_msg;

// In case any of our lines are larger than 70 characters, we should use wordwrap()
$message = wordwrap($message, 70, "\r\n");

// Send
if(mail($sender, 'Lead Recieved from smotik', $message)){
	echo "Sent";
}