<?php
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
                if($row['typeid']==3){
                    $sql="select booking.id AS bookingid ,booking.pincode,booking.time,booking.date,service.id From booking INNER JOIN
                    service ON booking.serviceid=service.id WHERE service.status=? AND service.id=?;";
                    $execu=$pdo->prepare($sql);
                    $execu->execute((array($id)));
                    $row = $execu->fetch();
                }
                if($row['typeid']==2){
                    $sql="select sequencenumber.id AS seqid ,sequencenumber.number,sequencenumber.date,service.id From sequencenumber INNER JOIN
                    service ON sequencenumber.serviceid=service.id WHERE service.id=?;";
                    $execu=$pdo->prepare($sql);
                    $execu->execute((array($id)));
                    $row = $execu->fetch();
                }
                $sql="UPDATE service
                SET status = ?
              WHERE id = ?;";   
               $execu=$pdo->prepare($sql);
               $execu->execute((array('finished',$id)));
               if($execu){
                // header('Location:./screen.php');
               echo json_encode(array("message" => 'successfully status code changed',"data"=>$row));
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
