<?php
session_start(); 
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");



//array to hold the returned values from the DB
$return_arr = array();
require_once "dbcon.php";

//query to return the values
try{
    $pincode=addslashes((htmlentities($_GET['pincode'])));
    $sql="select booking.id AS bookingid ,booking.pincode,booking.time,booking.date,service.id,service.subtypeid AS servicetype From booking INNER JOIN
    service ON booking.serviceid=service.id WHERE service.status=? AND service.date  >= ? and service.date < ?  AND booking.pincode LIKE ? ORDER BY booking.id DESC;"; 
    $execu=$pdo->prepare($sql);
    $today= date('Y-m-d 0:0:0', time());
    $addone = date('Y-m-d 0:0:0', strtotime("+1 day"));
    
    $execu->execute((array('pinding',$today,$addone,"$pincode%")));
    while ($row = $execu->fetch()){
        $return_arr[] = array(
            "pincode" => $row['pincode'],
            "time" => $row['time'],
            "date" => $row['time'],
            "serviceid" => $row['id'],
            "bookingid"=>$row['bookingid'],
            "servicetype"=>$row['servicetype']
        );
    }
    echo json_encode($return_arr);

}catch(Exception $e){
    echo json_encode(array("message" => $e));
    http_response_code(500);  
}

?>

