
<?php
session_start();
$data = json_decode(file_get_contents("php://input"),true);

if($data["get_sel_prods"]){
    /*
    $temp3 = $_SESSION["selectedprods"];
    while ($row = $temp3 ) {
        # code...
        $temp["selectedproducts"] = $row;
        array_push($temp2, $temp);
    }*/
    $temp = array();$temp2 = array();
    foreach ( $_SESSION["selectedprods"] as $items) {
                   # code...
               $temp["prod_name"] = $items; 
               array_push($temp2, $temp);
    }
                
    echo json_encode($temp2);
}