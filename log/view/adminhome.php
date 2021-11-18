<?php
//include auth_session.php file on all user panel pages
include("../db.php");
session_start()
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="../external/adminhome.css" />
</head>

<body>
    <div class="all">
        <div class="form">
        <div class="txt">
            <p>Usuario: <?php echo $_SESSION['username']; ?></p>
            <p>ADMIN USER.</p>
            <p><a href="../products/admincontrol.php">Control Panel Product</a></p>
            <p><a href="../usercontroller/adminusercontrol.php">Control Panel User</a></p>
            <p><a href="../logout.php">Logout</a></p>

            </div>
        </div>
    </div>
</body>

</html>