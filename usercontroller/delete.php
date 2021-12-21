<?php
    session_start();
    require_once "../db.php";

    $delete_num = $_GET['id'];
    $sql_delete =  "DELETE FROM users WHERE id = '$delete_num'";
    $query_delete = mysqli_query($con,$sql_delete);
    $row = mysqli_fetch_assoc($query_delete,MYSQLI_ASSOC);
    if(!$row){
        echo "<script>alert('Success Deleted')</script>";        
        header("Refresh: 0 , url = adminusercontrol.php");
        exit();

    }
    else{
        echo "<script>alert('Fail Delete')</script>";
        header("Refresh: 0 , url = adminusercontrol.php");
        exit();

    }
    mysqli_close($con);
?>