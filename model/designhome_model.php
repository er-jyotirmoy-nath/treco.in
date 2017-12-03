<?php

$data = json_decode(file_get_contents("php://input"),true);

$product_msg = "\r\n A Design Home Details have been recieved \r\n";

$product_msg .= "Project Name: ".(isset($data["project_name"])?$data["project_name"]:"NA")."\r\n";
$product_msg .= "Project Type: ".(isset($data["project_type"])?$data["project_type"]:"NA")."\r\n";
$product_msg .= "Square Feet: ".(isset($data["square_feet"])?$data["square_feet"]:"NA")."\r\n";
$product_msg .= "Floors: ".(isset($data["floors"])?$data["floors"]:"NA")."\r\n";
$product_msg .= "Name: ".(isset($data["name"])?$data["name"]:"NA")."\r\n";
$product_msg .= "Address: ".(isset($data["address"])?$data["address"]:"NA")."\r\n";
$product_msg .= "City: ".(isset($data["city"])?$data["city"]:"NA")."\r\n";
$product_msg .= "State: ".(isset($data["state"])?$data["state"]:"NA")."\r\n";
$product_msg .= "Postal code: ".(isset($data["postal_code"])?$data["postal_code"]:"NA")."\r\n";
$product_msg .= "Mobile: ".(isset($data["mobile"])?$data["mobile"]:"NA")."\r\n";
$product_msg .= "Phone: ".(isset($data["phone"])?$data["phone"]:"NA")."\r\n";
$product_msg .= "Email: ".(isset($data["email"])?$data["email"]:"NA")."\r\n";
$product_msg .= "Website: ".(isset($data["website"])?$data["website"]:"NA")."\r\n";
$product_msg .= "Burglar Alarm System: ".(isset($data["security"])?$data["security"]:"NA")."\r\n";
$product_msg .= "Security Info: ".(isset($data["security_info"])?$data["security_info"]:"NA")."\r\n";
$product_msg .= "Surveillance Camera System: ".(isset($data["camera"])?$data["camera"]:"NA")."\r\n";
$product_msg .= "Camera Info: ".(isset($data["camera_info"])?$data["camera_info"]:"NA")."\r\n";
$product_msg .= "Video Door Phone: ".(isset($data["VDP"])?$data["VDP"]:"NA")."\r\n";
$product_msg .= "VDP Info: ".(isset($data["vdp_info"])?$data["vdp_info"]:"NA")."\r\n";
$product_msg .= "Access Control System: ".(isset($data["access"])?$data["access"]:"NA")."\r\n";
$product_msg .= "Access Info: ".(isset($data["access_info"])?$data["access_info"]:"NA")."\r\n";
$product_msg .= "Lighting Automation: ".(isset($data["lightWire"])?$data["lightWire"]:"NA")."\r\n";
$product_msg .= "Lightwire Info: ".(isset($data["lightwire_info"])?$data["lightwire_info"]:"NA")."\r\n";
$product_msg .= "Curtain Control: ".(isset($data["curtain"])?$data["curtain"]:"NA")."\r\n";
$product_msg .= "Curtain Info: ".(isset($data["curtain_info"])?$data["curtain_info"]:"NA")."\r\n";
$product_msg .= "Multi-Room, Multi-Source Audio: ".(isset($data["audio"])?$data["audio"]:"NA")."\r\n";
$product_msg .= "Audio Info: ".(isset($data["audio_info"])?$data["audio_info"]:"NA")."\r\n";
$product_msg .= "Dedicated Home Theater / Media Room<: ".(isset($data["theater"])?$data["theater"]:"NA")."\r\n";
$product_msg .= "Theater Info: ".(isset($data["theater_info"])?$data["theater_info"]:"NA")."\r\n";
$product_msg .= "Video Distribution: ".(isset($data["video"])?$data["video"]:"NA")."\r\n";
$product_msg .= "Video Info: ".(isset($data["video_info"])?$data["video_info"]:"NA")."\r\n";
$product_msg .= "Voice (Telephony), EPABX: ".(isset($data["Voice"])?$data["Voice"]:"NA")."\r\n";
$product_msg .= "Voice Info: ".(isset($data["voice_info"])?$data["voice_info"]:"NA")."\r\n";
$product_msg .= "Data (Computer Networking): ".(isset($data["Data"])?$data["Data"]:"NA")."\r\n";
$product_msg .= "Data Info: ".(isset($data["data_info"])?$data["data_info"]:"NA")."\r\n";
$product_msg .= "Video (TV, Internal Video): ".(isset($data["videotv"])?$data["videotv"]:"NA")."\r\n";
$product_msg .= "VideoTV Info: ".(isset($data["videotv_info"])?$data["videotv_info"]:"NA")."\r\n";
$product_msg .= "Elderly Monitoring: ".(isset($data["homeAuto"])?$data["homeAuto"]:"NA")."\r\n";
$product_msg .= "HomeAuto Info: ".(isset($data["homeauto_info"])?$data["homeauto_info"]:"NA")."\r\n";
$product_msg .= "Children Monitoring: ".(isset($data["homeAuto2"])?$data["homeAuto2"]:"NA")."\r\n";
$product_msg .= "HomeAuto2 Info: ".(isset($data["homeauto2_info"])?$data["homeauto2_info"]:"NA")."\r\n";
$product_msg .= "People with Disabilities: ".(isset($data["homeAuto3"])?$data["homeAuto3"]:"NA")."\r\n";
$product_msg .= "HomeAuto3 Info: ".(isset($data["homeauto3_info"])?$data["homeauto3_info"]:"NA")."\r\n";
$product_msg .= " Asset Monitoring: ".(isset($data["media"])?$data["media"]:"NA")."\r\n";
$product_msg .= "Media Info: ".(isset($data["media_info"])?$data["media_info"]:"NA")."\r\n";
$product_msg .= "Event Choreography: ".(isset($data["event_Chr"])?$data["event_Chr"]:"NA")."\r\n";
$product_msg .= "Event Choreography info: ".(isset($data["event_chr_info"])?$data["event_chr_info"]:"NA")."\r\n";
$product_msg .= "Key Objectives / Comments: ".(isset($data["comments"])?$data["comments"]:"NA")."\r\n";

$sender = "jyotirmoy85@gmail.com";
$message = "The Following needs your attention:- \r\n".$product_msg;

// In case any of our lines are larger than 70 characters, we should use wordwrap()
$message = wordwrap($message, 70, "\r\n");

// Send
if(mail($sender, 'Lead Recieved from smotik', $message)){
	echo "Sent";
}