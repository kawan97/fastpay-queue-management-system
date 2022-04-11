<?php
$host='localhost';
$db='fastpay';
try{
$pdo= new PDO("mysql: host=$host;dbname=fastpay", 'root', '');
//Echo 'connected';
}
catch (PDOException $e){
  echo "not connected ".$e->getMessage();
    die();
}
//$pdo= null;
?>

 

