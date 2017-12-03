<?php


session_start();
require_once $_SERVER["DOCUMENT_ROOT"].'/web-admin/admin/connections/smotik_con.php';

/**
* 
*/
class contactClass 
{
	public  function saveContactDetail($data){

		$bdd = smotik_db::getInstance();
		try{
			$sql_count = "select count(*) from contact_us_table";
			$query_count = $bdd->prepare($sql_count);
			$query_count->execute();

			if($query_count->fetchColumn() > 0){
				$sql = "UPDATE `contact_us_table` SET 
				`address`=:address,`emailid`=:emailid,`phonenumber`=:phonenumber,`website`=:website,`facebook`=:facebook,`twitter`=:twitter,`linkedin`=:linkedin,`googleplus`=:googleplus WHERE 1";
			}
			else{
				$sql = "INSERT INTO `contact_us_table`
						(`address`,`emailid`,`phonenumber`,`website`,`facebook`,`twitter`,`linkedin`,`googleplus`)
					 VALUES(:address,:emailid,:phonenumber,:website,:facebook,:twitter,:linkedin,:googleplus)";
			}
		$query = $bdd->prepare($sql);
		$query->bindParam(":emailid",$data["conemail"]);
		$query->bindParam(":phonenumber",$data["comnumber"]);
		$query->bindParam(":website",$data["conwebsite"]);
		$query->bindParam(":facebook",$data["confacebook"]);
		$query->bindParam(":linkedin",$data["conlinkedin"]);
		$query->bindParam(":twitter",$data["contweeter"]);
		$query->bindParam(":googleplus",$data["congogleplus"]);
		$query->bindParam(":address",$data["conaddress"]);
		$query->execute();
		echo "Done";
		}
		catch (Exception $e){
			//echo $e->getmessage();
		}
		
	}

	public function getContactDetails()
	{
		# code...
		$bdd = smotik_db::getInstance();
		$sql = "select * from contact_us_table";

		$query = $bdd->prepare($sql);
		$query->execute();
		echo json_encode($query->fetchAll(PDO::FETCH_ASSOC));
	}
	
}
$newContact = new contactClass();
if (isset($_POST["conemail"]) && isset($_POST["comnumber"]) 
	&& isset($_POST["conwebsite"]) && isset($_POST["confacebook"]) && isset($_POST["conlinkedin"])) {
	# code...
	$newContact->saveContactDetail($_POST);
}

if (isset($_POST["getdata"]) && $_POST["getdata"] == "getdata") {
	# code...
	$newContact->getContactDetails();
}