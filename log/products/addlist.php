<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../external/adduseradmin.css">
    <title>Productos</title>
</head>

<body>


    <?php
    session_start();
    require_once "../db.php";
    if ($_SESSION['username'] == null) {
        echo "<script>alert('Please login.');</script>";
        header("Refresh:0 , url=index.html");
    }
    $username = $_SESSION['username'];
    $sql_fetch_todos = "SELECT * FROM product ORDER BY id ASC";
    $query = mysqli_query($con, $sql_fetch_todos);

    ?>


    <body>
        <div class="h">
            <div class="container">
                <div class="title">
                    <h2> <b>AÑADIR PRODUCTOS | <?php echo $username ?></b></h2>
                </div>




                <form class="formulario" method="POST" enctype="multipart/form-data" action="controlador/addlist.php">
                    <div class="form-group">
                        <label for="exampleInputEmail1"></label>

                        <input type="text" class="form-control" name="name" placeholder="Nombre producto" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1"></label>

                        <input type="number" class="form-control" name="amount" placeholder="Cantidad" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"></label>

                        <input type="float" class="form-control" name="price" placeholder="precio" required>
                    </div>



                    <input type="file" name="img_up">
                    <br>
                    <input value="Guardar Cambios" type="submit">
                    <a href="admincontrol.php"><input value="Volver al panel" type="button"></a>
                </form>
            </div>

            <?php
            mysqli_close($con);
            ?>
        </div>
    </body>

</html>