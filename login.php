<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    if(isset($_SESSION['username']) && isset($_SESSION['password'])){
        header('Location:./index.php');
    }
?>
<?php 
include './dbcon.php';
$showerror=false;
$username='';
$password='';
if ( isset( $_POST['submit'])) { 
  $username=addslashes((htmlentities($_POST['username'])));
  $password=addslashes((htmlentities($_POST['password']))); 
  $sql="select * from user where username=? and password=?;"; 
  $stmt=$pdo->prepare($sql); 
  $stmt->execute(array($username, $password)); 
  $getpassword='';
  $getusername='';
  $getfullname='';
  while ($row = $stmt->fetch()) { 
      $getusername=$row['username']; 
      $getpassword=$row['password']; 
      $getfullname=$row['firstname'].' '.$row['lastname'];
       $pdo= null;
  }
    if ($stmt->rowCount()==1){ 
    $_SESSION['username']=$getusername; 
    $_SESSION['password']=$getpassword; 
    setcookie("fullname", $getfullname, time() + (86400 * 2), "/");
    header ('Location: index.php'); 
    }else{
        $showerror=true;

    }
  
  }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn</title>
</head>
<body class=''>
    <form method="post">
        <input required name="username" type="text" value='<?php echo $username; ?>' placeholder="user name">
        <input required name="password" type="password" value='<?php echo $password; ?>' placeholder="password">
        <button type="submit" name="submit" type="button">
            LogIn
        </button> 
    </form>
    <?php
    if($showerror){
        echo '<p>cardinal error</p> ';
    }
    ?>

</body>
</html>