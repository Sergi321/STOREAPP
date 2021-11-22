<?php
session_start();
require_once "../db.php";
if ($_SESSION['username'] == null) {
    echo "<script>alert('Please login.');</script>";
    header("Refresh:0 , url=index.html");
    exit();
}
$username = $_SESSION['username'];
?>
<!doctype html>
<html lang="en">

<head>
    <title>Modify Page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../external/adduseradmin.css">

</head>

<body>

    <body>
        <div class="h">
            <div class="container">
                <div class="title">
                    <h2> <b>EDITAR USUARIOS | <?php echo $username ?></b></h2>
                </div>

                <form method="POST" action="controlador/fix.php">
                    <div class="form-group">
                        <label for="exampleInputEmail1"></label>

                        <input type="text" class="form-control" name="username" placeholder="Usuario: " required>
                        <input type="hidden" value="<?php echo $_GET['id'] ?>" name="id" />
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1"> </label>

                        <input type="email" name="email" placeholder="Email: " required>

                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"> </label>

                        <input type="text" name="password" placeholder="Contraseña: " required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"> </label>

                        <input type="text" name="usertype" placeholder="Rol: " required>
                    </div>
                    <input value="Guardar Cambios" type="submit">
                    <a href="adminusercontrol.php"><input value="Volver al panel" type="button"></a>
                </form>
            </div>
        </div>
        <?php
        mysqli_close($con);
        ?>
    </body>

</html>