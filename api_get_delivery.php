<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");


//array to hold the returned values from the DB
$return_arr = array();
require_once "dbcon.php";

//query to return the values
try{
    $sql="select delivery.id AS deliveryid ,delivery.phone,delivery.name,delivery.address,delivery.date,service.id,service.subtypeid AS servicetype From delivery INNER JOIN
    service ON delivery.serviceid=service.id WHERE service.status=? AND delivery.date=? ORDER BY delivery.id ASC;"; 
    $execu=$pdo->prepare($sql);
    $today= date('Y-m-d', time());
    $execu->execute((array('pinding',$today)));
    while ($row = $execu->fetch()){
        $return_arr[] = array(
            "deliveryid" => $row['deliveryid'],
            "phone" => $row['phone'],
            "name" => $row['name'],
            "address" => $row['address'],
            "date" => $row['date'],
            "serviceid" => $row['id'],
            "servicetype"=>$row['servicetype'],
        );
    }
    if(count($return_arr)==0){
        echo json_encode(array("message" => 'you dont have any delivery'));
    }else{

        echo json_encode($return_arr);
    }

}catch(Exception $e){
    echo json_encode(array("message" => $e));
    http_response_code(500);  
}



//return the json encoded values

