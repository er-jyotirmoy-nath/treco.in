<?php 


/**
* 
*/
if (!ini_get('display_errors')) {
    ini_set('display_errors', '1');
}
session_start();
require_once $_SERVER["DOCUMENT_ROOT"].'/web-admin/admin/connections/smotik_con.php';
class prodcuts_class 
{
	
	function __construct()
	{
		# code...
	}

	public function DeleteProduct($value)
	{
		# code...
		$bdd = smotik_db::getInstance();
		$sql = "DELETE FROM products_table WHERE ID='$value'";
		$query = $bdd->prepare($sql);
		if($query->execute()){
			echo "Done";
		}
	}
	public function GetProducts()
	{        
		# code...
		$bdd = smotik_db::getInstance();
		$sql = "SELECT * FROM `products_table`";
		$query = $bdd->prepare($sql);
		$query->execute();
		echo json_encode($query->fetchAll(PDO::FETCH_ASSOC));
	}

	public function prodUpload($data, $temp1) {
        try {
            $bdd = smotik_db::getInstance();
            
            $target_dir_1 = "images/";
            $target_dir = $_SERVER["DOCUMENT_ROOT"].'/web-admin/admin/images/';
            $target_file = array();
            
            foreach ($temp1 as $image) {
				
			
            if (isset($image  ["tmp_name"])) {

                if (isset($title)) {
                    $check = getimagesize($image ["tmp_name"]);
                    if ($check !== false) {
                        echo "File is an image - " . $check ["mime"] . ".";
                        $uploadOk = 1;
                    } else {
                        echo "File is not an image.";
                        die();
                        $uploadOk = 0;
                    }
                }
                
                $target_file_1 = $target_dir . basename($image  ["name"]);
                $target_file[] = $target_dir_1 . basename($image  ["name"]);
            	$uploadOk = 1;
            	$imageFileType = pathinfo(($target_file_1), PATHINFO_EXTENSION);
                // Check file size
                if ($image  ["size"] > 500000000) {
                    echo "Sorry, your file is too large.";
                    die();
                    $uploadOk = 0;
                }
                // Allow certain file formats
                if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $imageFileType != "JPG") {
                    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                    die();
                    $uploadOk = 0;
                }
                // Check if $uploadOk is set to 0 by an error
                if ($uploadOk == 0) {
                    echo "Sorry, your file was not uploaded.";
                    die();
                    // if everything is ok, try to upload file
                } else {
                    if (move_uploaded_file($image  ["tmp_name"], $target_file_1)) {
                        echo "The file " . basename($image  ["name"]) . " has been uploaded.";
                    } else {
                        echo "Sorry, there was an error uploading your file.";
                        die();
                    }
                }
            }

            }



            $title = $data ["prod_name"];
            $content = $data ["tinymceModel"];
            $isvisible = $data ["prod_vis"];
            $section = $data["select_section"];
            $prodtype_1   = $data["prodtype_1"];
            $prodtype_2   = $data["prodtype_2"];
            $prodtype_3   = $data["prodtype_3"];
            $prodtype_4   = $data["prodtype_4"];
            $carousel_1 = $target_file[0];
            $carousel_2 = $target_file[1];
            $carousel_3 = $target_file[2];
            $use_1 = $target_file[3];
            $use_2 = $target_file[4];
            $use_3 = $target_file[5];
            $use_4 = $target_file[6];
            $date_blog = date('d-m-Y', strtotime('now'));
            $sql = "INSERT INTO `products_table`(`name`, `description`, `section`, `carousel_1`, `carousel_2`, `carousel_3`, `use_1`, `use_2`, `use_3`
            , `use_4`, `visible`,`subcat_1`,`subcat_2`,`subcat_3`,`subcat_4`) 
            VALUES ('$title',:description,'$section','$carousel_1','$carousel_2','$carousel_3','$use_1','$use_2','$use_3','$use_4','$isvisible','$prodtype_1','$prodtype_2','$prodtype_3','$prodtype_4')";
            $query = $bdd->prepare($sql);
            $query->bindParam(":description",$content);
            $query->execute();
            if ($query->rowCount() > 0) {
                echo "Done";
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}


$new_product_line = new prodcuts_class();

if (isset($_POST["prod_name"]) && isset($_FILES)) {
	# code...
	$temp1 = array();
	$temp2 = array();
	//print_r($temp);
	$temp1[] = $_FILES["prod_image_1"];
	$temp1[] = $_FILES["prod_image_2"];
	$temp1[] = $_FILES["prod_image_3"];
	$temp1[] = $_FILES["prod_image_use_1"];
	$temp1[] = $_FILES["prod_image_use_2"];
	$temp1[] = $_FILES["prod_image_use_3"];
	$temp1[] = $_FILES["prod_image_use_4"];

	$temp2 = $_POST;
	$new_product_line->prodUpload($temp2,$temp1);
}

if (isset($_POST["get_products"])) {
	# code...
	$new_product_line->GetProducts();
}

if (isset($_POST["delte_prod"]) && isset($_POST["prod_id"]) && !empty($_POST["prod_id"])) {
	# code...
	$new_product_line->DeleteProduct($_POST["prod_id"]);
}
