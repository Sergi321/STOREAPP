<?php
session_start();
require_once "../db.php";
if ($_SESSION['username'] == null) {
    echo "<script>alert('Please login.');</script>";
    header("Refresh:0 , url=index.html");
    exit();
}
$username = $_SESSION['username'];
$sql_fetch_todos = "SELECT * FROM product ORDER BY id ASC";
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

    <div class="container">
        <h1>Edición de productos</h1>
        <h2> [<?php echo $username ?>]</h2>
    </div>

    <div class="fixproduct">
        <form method="POST" action="controlador/fix.php">
            <div class="form-group">
                <label for="exampleInputEmail1">List product : </label>
                <br>
                <input type="text" class="form-control" name="name" value="<?php echo $_GET['message']; ?>" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Amount : </label>
                <br>
                <input type="number" value="<?php echo $_GET['amount'] ?>" class="form-control" name="value" required>
                <input type="hidden" value="<?php echo $_GET['id'] ?>" name="id" />
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Precio : </label>
                <br>
                <input type="float" class="form-control" name="price" value="<?php echo $_GET['price']; ?>" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">image : </label>
                <br>
                <input value="http://localhost/log/assets/" type="text" class="form-control" name="image" value="<?php echo $_GET['image']; ?>" required>
            </div>
            <br>
            <div class="form-button">
                <button type="submit" class="modify" style="float:right">Modify</button>
                <a name="" id="" class="return" href="admincontrol.php" role="button" style="float:left">Return</a>
            </div>
        </form>
    </div>
    <?php
    mysqli_close($con);
    ?>
</body>

</html>