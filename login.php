<?php
session_start(); ?>
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
    ob_start();
    header ('Location: index.php'); 
    ?>
    <script>window.location.href = 'index.php'; //Will take you to Google.
</script>

    <?php
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
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
    <link rel="shortcut icon" href="./images/fav-icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="css/bizord.css">

</head>

<body>
    <center>
        
    <div class="container">
        <div class="container-wrapper">

            <h3 class="login-text"><i class="bi bi-person-circle ac-logo"></i>Login</h3>
        
            <form method="post">
                <div class="item"><input class="input"  required name="username" type="text" value='<?php echo $username; ?>' placeholder="user name"></div> 
                <div class="item"><input class="input" required name="password" type="password" value='<?php echo $password; ?>' placeholder="password"> </div>

                <div class="item submit"><button type="submit" name="submit">Submit</button></div>
            </form>

        </div>
        <?php
    if($showerror){
        echo '<p>cardinal error</p> ';
    }
    ?>

    </div>
    </center>
</body>

</html>
