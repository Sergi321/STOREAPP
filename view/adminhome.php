<?php
//include auth_session.php file on all user panel pages
include("../db.php");
session_start()
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Zona Admin</title>
    <link rel="stylesheet" href="../external/adminhome.css" />
</head>

<body>
    <?php 

$type=$_SESSION['username'];

$verification= "SELECT usertype FROM users where username = '".$type."'";
$root = mysqli_query($con, $verification);

                $rol = mysqli_fetch_array($root);

                if ($rol["usertype"] == "admin") {  ?>
    <div class="all">
        <div class="form">
        <div class="txt">
            <p>Usuario: <?php echo $_SESSION['username']; ?></p>
            <p>ADMIN USER.</p>
            <p><a href="../products/admincontrol.php">Control Panel Product</a></p>
            <p><a href="../usercontroller/adminusercontrol.php">Control Panel User</a></p>
            <p><a href="userview.php">Tienda</a></p>
            <p><a href="../logout.php">Logout</a></p>

            </div>
        </div>
    </div>
                 
<?php  }else{
                    echo "Pa tu casa crack";
                }
                ?>
  

</body>

</html>