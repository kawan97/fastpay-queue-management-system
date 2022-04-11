<?php
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Header: Acess-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization");
//   $sqldegree="select quiz.title,quiz.date,answer.degree From quiz INNER JOIN
//   answer ON quiz.id=answer.quizid WHERE quiz.classid=? AND answer.classid=? AND answer.studentname=? AND
//    (quiz.date >= ? AND quiz.date < ?);"; 
require_once "dbcon.php";


$data = json_decode(file_get_contents("php://input"), true);

//get data
$typeid = (int)$data['typeid'];
$status = 'pinding';
$subtypeid = (int)$data['subtypeid'];



//insert into db
try{
    $sql="INSERT INTO service (typeid,status,subtypeid) VALUES (?,?,?)";  
    $execu=$pdo->prepare($sql);
    $execu->execute((array($typeid,$status,$subtypeid)));
}catch(Exception $e){
    echo json_encode(array("message" => $e));
    http_response_code(500);  
}

//add delivery data
if($typeid == 1){
    //get other data
    $name = $data['name'];
    $phone = (int)$data['phone'];
    $address = $data['address'];  
    $getserviceid=$pdo->lastInsertId();
    $serviceid=(int)$getserviceid;
    $sql="INSERT INTO delivery (name,phone,address,serviceid) VALUES (?,?,?,?)";  
    $execu=$pdo->prepare($sql);
    $execu->execute(array($name,$phone,$address,$serviceid));
    if($execu){
        echo json_encode(array("message" => 'you successfully add delivery'));
        http_response_code(201);  
    }else{
        echo json_encode(array("message" => "you have an error"));
        http_response_code(400);   
    }
}

//add Showroom sequence number by date
if($typeid == 2){
    $getserviceid=$pdo->lastInsertId();
    $serviceid=(int)$getserviceid;
    //get last sequnce number
    $today= date('Y-m-d', time());
    $sqlsequencenumber="SELECT * FROM `sequencenumber` WHERE date = ? ORDER BY id DESC LIMIT 1;"; 
    $stmtsequence=$pdo->prepare($sqlsequencenumber); 
    $stmtsequence->execute(array($today));
    $data = $stmtsequence->fetch();
    if($data==false){
    $sql="INSERT INTO sequencenumber (number,serviceid) VALUES (?,?)";  
    $execu=$pdo->prepare($sql);
    $execu->execute(array(1,$serviceid));
    echo json_encode(array("message" => 1));
    http_response_code(201); 
    }else{
        $sql="INSERT INTO sequencenumber (number,serviceid) VALUES (?,?)";  
        $execu=$pdo->prepare($sql);
        $number=(int)$data['number']+1;
        $execu->execute(array($number,$serviceid));
        echo json_encode(array("message" => $number));
        http_response_code(201); 
    }
 


}

//add booking random number
if($typeid == 3){
    //get time
    $time = $data['time'];
    $getserviceid=$pdo->lastInsertId();
    $serviceid=(int)$getserviceid;
    //add random pin code
    $num1 = rand(100000,999999);
    $num2 = rand(100000,999999);
    $num3 = rand(100,999);
    $endString = $num1.$num2.$num3;

    $sql="INSERT INTO booking (time,pincode,serviceid) VALUES (?,?,?)";  
    $execu=$pdo->prepare($sql);
    $execu->execute(array($time,$endString,$serviceid));
    echo json_encode(array("message" =>"you successfully booking and your pin code is :".$endString));
    http_response_code(201); 
}

// echo json_encode(array("message" => "you have successfully registered"));
// http_response_code(201);






