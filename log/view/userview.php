<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../external/store.css" />
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <title>Document</title>
</head>

<body>

    <?php
    session_start();
    require_once "../db.php";
    ?>

    <div class="container-head">
        <div class="navline">
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="sectiontecnologia.php">Tecnología</a>
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




    <div class="page_description">
        <h1 class="tittle_store">STOREAPP</h1>
        <div class="separator">

        </div>

        <p class="text-description">
            STOREAPP es una tienda que ofrece productos de cualquier tipo con un amplio catálogo de diferentes
            marcas <br>a un precio muy competitivo,
            con STOREAPP usted va a ser capaz de encontrar lo que desea!</br>
        </p>

        <h1 class="tittle_productes">SOBRE NUESTROS PRODUCTOS</h1>
        <p class="text-description">Nuestros productos son completamente originales con una garantía de mínimo 12 meses,<br>
            además cuentas con 25 dias para devolver el producto </br>siempre que este en <b>perfectas condiciones</b> y su embalaje original
        </p>


        <h1 class="tittle_productes_DESTACADOS">PRODUCTOS DESTACADOS</h1>


    </div>
    <div class="carousel" data-flickity='{ "wrapAround": true, "freeScroll": true, "imagesLoaded":true,  "autoPlay": 2500}'>
        <div class="carousel-cell">

            <div class="box_product">
                <div class="box_product_text">
                    <p class="preoduct_text"><b><?php

                                                $sql = "SELECT proname, price,image FROM product where id=12";
                                                $result = $con->query($sql);
                                                if ($row = $result->fetch_assoc()) {
                                                    echo  $row["proname"] . ": " . $row["price"] . "€";
                                                    echo "<br><img class='img_pr'src=" . $row["image"] . ">";
                                                } ?></b></p>

                </div>
            </div>

        </div>
        <div class="carousel-cell">

            <div class="box_product">
                <div class="box_product_text">
                    <p class="preoduct_text"><b><?php

                                                $sql = "SELECT proname, price,image FROM product where id=8";
                                                $result = $con->query($sql);
                                                if ($row = $result->fetch_assoc()) {
                                                    echo  $row["proname"] . ": " . $row["price"] . "€";
                                                    echo "<br><img class='img_pr'src=" . $row["image"] . ">";
                                                } ?></b></p>

                </div>
            </div>
        </div>
        <div class="carousel-cell">

            <div class="box_product">
                <div class="box_product_text">
                    <p class="preoduct_text"><b><?php

                                                $sql = "SELECT proname, price,image FROM product where id=11";
                                                $result = $con->query($sql);
                                                if ($row = $result->fetch_assoc()) {
                                                    echo  $row["proname"] . ": " . $row["price"] . "€";
                                                    echo "<br><img class='img_pr'src=" . $row["image"] . ">";
                                                } ?></b></p>

                </div>
            </div>
        </div>
    </div>


    </div>

    <!-- <div class="container_footer">


        <div class="container_info">

        </div>



        <div class="container_social_media">

        </div> -->


    </div>












    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
</body>

</html>