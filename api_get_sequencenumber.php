<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");

$num=0;
if(isset($_SESSION['num'])){
    $num=(int)$_SESSION['num'];

}


//array to hold the returned values from the DB
$return_arr = array();
require_once "dbcon.php";

//query to return the values
try{
    if($num!=2){
        $sql="select sequencenumber.id AS seqid ,sequencenumber.number,sequencenumber.date,service.id,service.subtypeid AS servicetype From sequencenumber INNER JOIN
        service ON sequencenumber.serviceid=service.id WHERE service.status=? AND sequencenumber.date=? and service.subtypeid=1 ORDER BY sequencenumber.id ASC LIMIT 1;";
        $execu=$pdo->prepare($sql);
        $today= date('Y-m-d', time());
        $execu->execute((array('pinding',$today)));
        $data = $execu->fetch();
        if($data==false){
            $sql="select sequencenumber.id AS seqid ,sequencenumber.number,sequencenumber.date,service.id,service.subtypeid AS servicetype From sequencenumber INNER JOIN
            service ON sequencenumber.serviceid=service.id WHERE service.status=? AND sequencenumber.date=? and service.subtypeid!=1 ORDER BY sequencenumber.id ASC LIMIT 1;";   
            $num=0;
        }else{
            $num=$num+1;
        }
    }else{
        $sql="select sequencenumber.id AS seqid ,sequencenumber.number,sequencenumber.date,service.id,service.subtypeid AS servicetype From sequencenumber INNER JOIN
        service ON sequencenumber.serviceid=service.id WHERE service.status=? AND sequencenumber.date=? and service.subtypeid!=1 ORDER BY sequencenumber.id ASC LIMIT 1;";
        $execu=$pdo->prepare($sql);
        $today= date('Y-m-d', time());
        $execu->execute((array('pinding',$today)));
        $data = $execu->fetch();
        if($data==false){
            $sql="select sequencenumber.id AS seqid ,sequencenumber.number,sequencenumber.date,service.id,service.subtypeid AS servicetype From sequencenumber INNER JOIN
            service ON sequencenumber.serviceid=service.id WHERE service.status=? AND sequencenumber.date=? and service.subtypeid=1 ORDER BY sequencenumber.id ASC LIMIT 1;";   
        }
        $num=0;
    }
    $_SESSION['num']=$num; 

    $execu=$pdo->prepare($sql);
    $today= date('Y-m-d', time());
    $execu->execute((array('pinding',$today)));
    while ($row = $execu->fetch()){
        $return_arr[] = array(
            "seqid" => $row['seqid'],
            "number" => $row['number'],
            "date" => $row['date'],
            "serviceid" => $row['id'],
            "servicetype"=>$row['servicetype'],
            "num"=>$num,
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

