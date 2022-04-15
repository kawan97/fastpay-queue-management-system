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