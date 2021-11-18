<?php
    session_start();
    require_once "../../db.php";

    
        $sql = "UPDATE users SET username = '" . trim($_POST['username']) . "' ,email = '" . trim($_POST['email']) . "',password = '" . trim(md5($_POST['password'])) . "',usertype = '" . trim($_POST['usertype']) . "' WHERE id = '" . $_POST['id'] . "'";
        if($con->query($sql)){
            echo "<script>alert('Successfully resolved')</script>";
            header("Refresh:0 , url =../adminusercontrol.php");
            exit();

        }
        else{
            echo "<script>alert('Unsuccessful resolved')</script>";
            header("Refresh:0 , url =../adminusercontrol.php");
            exit();

        }
    
   
    mysqli_close($con);
?>
