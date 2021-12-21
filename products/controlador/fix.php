<?php
    session_start();
    require_once "../../db.php";
    if($_SESSION['username'] == null){
    echo "<script>alert('Please login.')</script>";
    header("Refresh:0 , url = ../index.html");
    exit();
    }
    if($_POST['name'] != null && $_POST['value'] != null){
        $sql = "UPDATE product SET proname = '" . trim($_POST['name']) . "' ,amount = '" . trim($_POST['value']) . "',price = '" . trim($_POST['price']) . "' ,image = '" . trim($_POST['image']) . "' WHERE id = '" . $_POST['id'] . "'";
        if($con->query($sql)){
            echo "<script>alert('Edicion correcta')</script>";
            header("Refresh:0 , url =../admincontrol.php");
            exit();

        }
        else{
            echo "<script>alert('Unsuccessful resolved')</script>";
            header("Refresh:0 , url =../admincontrol.php");
            exit();

        }
    }
    else{
        echo "<script>alert('Please fill in information.')</script>";
        header("Refresh:0 , url = ../admincontrol.php");
        exit();

    }
    mysqli_close($con);
?>
