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

    <div class="container-head">

        <div class="container-storename">
            <p class="store-name"><b>STOREAPP</b></p>
        </div>

        <div class="container-data">
            <?php

            require_once "../db.php";
            session_start();


       

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $username = $_POST["username"];
                $password = $_POST["password"];


                $sql = "select * from users where username='" . $username . "' AND password='" . md5($password) . "'";

                $result = mysqli_query($con, $sql);

                $row = mysqli_fetch_array($result);


                if ($row["usertype"] == "user") {

                    $_SESSION["username"] = $username;

                    header("location:userview.php");
                } elseif ($row["usertype"] == "admin") {

                    $_SESSION["username"] = $username;

                    header("location:adminhome.php");
                } else {
                    echo "username or password incorrect";
                }
            }










            ?>
            <form class="form" method="post" name="login">
                <img class="login_icons" src="../assets/user.png">
                <input type="text" name="username" placeholder="Usuario">
                <img class="login_icons" src="../assets/lock.png">
                <input type="password" name="password" placeholder="Contraseña">
                <input type="submit" value="Login" name="submit" class="login-button" />
                <input type=button onClick="parent.location='Registration.php'" value='Registrarme'>
            </form>



        </div>
    </div>
    <?php

    ?>


    <div class="container-page">
        <div class="page_description">
            <h1 class="tittle_store">STOREAPP</h1>
            <div class="separator">

            </div>

            <p class="text-description">
                STOREAPP es una tienda que ofrece productos de cualquier tipo con un amplio catálogo de diferentes
                marcas <br>a un precio muy competitivo,
                con STOREAPP usted va a ser capaz de encontrar lo que desea!</br>
            </p>


            <h1 class="tittle_productes">-SOBRE NUESTROS PRODUCTOS-</h1>
            <p class="text-description">Nuestros productos son completamente originales con una garantía de mínimo 12 meses,<br>
                además cuentas con 25 dias para devolver el producto </br>siempre que este en <b>perfectas condiciones</b> y su embalaje original</p>

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

















    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
</body>

</html>