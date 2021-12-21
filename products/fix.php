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
<link rel="stylesheet" href="../external/adduseradmin.css">

<head>
    <title>Modify Page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


</head>

<body>

    <body>
        <div class="h">
            <div class="container">
                <div class="title">
                    <h2> <b>EDITAR PRODUCTOS | <?php echo $username ?></b></h2>
                </div>


                <div class="fixproduct">
                    <form method="POST" action="controlador/fix.php">
                        <div class="form-group">
                            <label for="exampleInputEmail1"></label>
                            <input type="text" class="form-control" name="name" placeholder="Producto : <?php echo $_GET['message']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1"></label>
                            <input type="number" class="form-control" name="value" placeholder="Stock : <?php echo $_GET['amount']; ?>" required>
                            <input type="hidden" value="<?php echo $_GET['id'] ?>" name="id" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1"></label>
                            <input type="float" class="form-control" name="price" placeholder="Precio : <?php echo $_GET['price']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1"></label>
                            <input  type="text" class="form-control" name="image" placeholder="<?php echo $_GET['image']; ?>" required>
                        </div>
                    
                    <input value="Guardar Cambios" type="submit">
                    <a href="admincontrol.php"><input value="Volver al panel" type="button"></a>
                    </form>
                </div>
            </div>
        </div>
        <?php
        mysqli_close($con);
        ?>
    </body>

</html>