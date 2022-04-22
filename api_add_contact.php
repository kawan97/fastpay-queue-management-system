<?php
session_start();
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Header: Acess-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization");
require_once "dbcon.php";


$data = json_decode(file_get_contents("php://input"), true);

//get data
$name = $data['name'];
$email = $data['email'];
$subject = $data['subject'];
$message = $data['message'];



//insert into db
try{
    $sql="INSERT INTO contact (name,email,subject,message) VALUES (?,?,?,?)";  
    $execu=$pdo->prepare($sql);
    $execu->execute((array($name,$email,$subject,$message)));
    if($execu){
        echo json_encode(array("message" =>"you successfully send it"));
        http_response_code(201); 
    }
}catch(Exception $e){
    echo json_encode(array("message" => $e));
    http_response_code(500);  
}






