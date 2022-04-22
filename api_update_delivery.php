<?php
session_start(); 
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

?>
<?php
    if(isset($_SESSION['username']) && isset($_SESSION['password'])){
        header("Content-Type: application/json; charset=UTF-8");
        header("Access-Control-Allow-Origin: *");
        
        
        //array to hold the returned values from the DB
        require_once "dbcon.php";
        
        //query to return the values
        try{
            $id=addslashes((htmlentities($_GET['id'])));
            $sql="select * from service WHERE id = ?;";   
            $execu=$pdo->prepare($sql);
            $execu->execute((array($id)));
            $row = $execu->fetch();
            
            if(!$row){
                echo json_encode(array("message" => 'Sorry you have dont have that service'));
                http_response_code(403);  
            }else{
                $sql="select delivery.id AS deliveryid ,delivery.phone,delivery.name,delivery.address,delivery.date,service.id,service.subtypeid AS servicetype From delivery INNER JOIN
                service ON delivery.serviceid=service.id WHERE service.id=? ORDER BY delivery.id ASC;"; 
                $execu=$pdo->prepare($sql);
                $execu->execute((array($id)));
                $secondrow = $execu->fetch();

                $sql="UPDATE service
                SET status = ?
              WHERE id = ?;";   
               $execu=$pdo->prepare($sql);
               $execu->execute((array('finished',$id)));
               if($execu){
                // header('Location:./screen.php');
               echo json_encode(array("message" => 'successfully status code changed',"data"=>$secondrow));
               http_response_code(201);  
               }else{
                   echo json_encode(array("message" => 'Sorry you have an error'));
                   http_response_code(500);  
           
               }
            }
        
         
        
        }catch(Exception $e){
            echo json_encode(array("message" => $e));
            http_response_code(500);  
        }
        

    }else{
        echo json_encode(array("message" => 'Sorry you have dont have a permisstion to update that service'));
        http_response_code(403);
         }


?>
