<?php
session_start();
require_once "../db.php";
if ($_SESSION['username'] == null) {
    echo "<script>alert('Please login.');</script>";
    header("Refresh:0 , url=index.html");
    exit();
}
$username = $_SESSION['username'];
$sql_fetch_todos = "SELECT * FROM users ORDER BY id ASC";
$query = mysqli_query($con, $sql_fetch_todos);

?>
<!doctype html>
<html lang="en">

<head>
    <title>Modify Page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  

</head>
<body>



        <form method="POST" action="controlador/fix.php">
            <div class="form-group">
                <label for="exampleInputEmail1">Usuario : </label>
                <br>
                <input type="text" class="form-control" name="username" required>
                <input type="hidden" value="<?php echo $_GET['id'] ?>" name="id" />
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Email : </label>
                <br>
                <input type="email"name="email"  required>
             
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Contraseña : </label>
                <br>
                <input type="text"name="password" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Rol : </label>
                <br>
                <input type="text" name="usertype" required>
            </div>
            <br>
            <div class="form-button">
                <button type="submit" class="modify" >Guardar Cambios</button>
                <a name="" id="" class="return" href="adminusercontrol.php" role="button">Volver al panel</a>
            </div>
        </form>

    <?php
    mysqli_close($con);
    ?>
</body>
</html>