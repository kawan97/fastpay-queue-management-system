<?php
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");



//array to hold the returned values from the DB
$return_arr = array();
require_once "dbcon.php";

//query to return the values
try{
    $sql="select sequencenumber.id AS seqid ,sequencenumber.number,sequencenumber.date,service.id From sequencenumber INNER JOIN
    service ON sequencenumber.serviceid=service.id WHERE service.status=? AND sequencenumber.date=? ORDER BY sequencenumber.id ASC LIMIT 1;"; 
    $execu=$pdo->prepare($sql);
    $today= date('Y-m-d', time());
    $execu->execute((array('pinding',$today)));
    while ($row = $execu->fetch()){
        $return_arr[] = array(
            "seqid" => $row['seqid'],
            "number" => $row['number'],
            "date" => $row['date'],
            "serviceid" => $row['id'],
        );
    }
    if(count($return_arr)==0){
        echo json_encode(array("message" => 'you dont have any customer'));
    }else{

        echo json_encode($return_arr);
    }

}catch(Exception $e){
    echo json_encode(array("message" => $e));
    http_response_code(500);  
}



//return the json encoded values

