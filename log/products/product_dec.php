<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../external/product_desc.css">
    <link rel="stylesheet" href="../external/header/header.css">
    <title>Document</title>
</head>

<body>

    <?php
    session_start();
    require_once "../db.php";
    if ($_SESSION['username'] == null) {
        echo "<script>alert('Please login.');</script>";
        header("Refresh:0 , url=index.html");
        exit();
    }
    
    ?>
<div class="container-head">
        <div class="navline">
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="../view/sectiontecnologia.php">Tecnología</a>
                <a href="../perfil_usuario/perfil.php">Comida</a>
                <a href="#">Deporte</a>
                <a href="#">Ropa</a>
            </div>

            <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>

            <div class="container-page">

                <script>
                    function openNav() {
                        document.getElementById("mySidenav").style.width = "250px";
                    }

                    function closeNav() {
                        document.getElementById("mySidenav").style.width = "0";
                    }
                </script>

            </div>
        </div>
        <div class="container-storename">
            <p class="store-name"><b>STOREAPP</b></p>
            <!-- <img class="logo" src="../assets/loogtest1.png"> -->
        </div>

        <div class="container-data">
            <?php


            $username = $_SESSION['username'];


            $sql = "SELECT ruta_img FROM users where username='" . $username . "'";
            $result = $con->query($sql);


            if ($row = $result->fetch_assoc()) {
                echo "<br><img class='avatar_perfil'src=" . $row["ruta_img"] . ">";
            } ?>
            <p class="username"><b>USUARIO: <?php echo $_SESSION['username']; ?></b></p>

            <p class="logout"><a href="../logout.php"><b>SALIR</b></a></p>
        </div>

    </div>

    <div class="container_page">

        <div class="box_product">
            <b><?php
$id = $_POST['id'];

                $sql = "SELECT proname, price,image,amount,description FROM product where id='".$id."'";
                $result = $con->query($sql);
                if ($row = $result->fetch_assoc()) {
                    $stock=$row["amount"];
                    $desc=$row["description"];
                    $name_product=$row["proname"];
                    $price=$row["price"];
                    echo "<br><img class='product_picture'src=" . $row["image"] . ">";
                } ?></b>
        </div>

        <div class="box_container_info">

        <p class="title_product"><?php echo $name_product;?> </p>
        <p class="text_product"><?php echo $price;?>€</p>
            <form action="cart/controler/stock.php" method="post">
                <input type="number" name="quantity" placeholder=<?php echo $stock;?> required>
                <br>
                <b> <input type="submit" value="AÑADIR AL CARRITO"></b>
            </form>
            <p class="text_product"><?php echo $desc;?></p>

        </div>




    </div>


</body>

</html>