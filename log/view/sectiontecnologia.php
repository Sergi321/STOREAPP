<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../external/sectiontecno.css" />
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
                <a href="../view/userview.php">Inicio</a>
                <a href="sectiontecnologia.php">Tecnología</a>
                <a href="../perfil_usuario/perfil.php">Comida</a>
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

    <div class="container-page">

        <div class="box_title_section">
            <p class="title_section"><b>SECCIÓN DE TECNOLOGÍA</b></p>

        </div>



        <div class="contenedor_productos">

            <div class="contenedor_row">
                <div class="box_product">
                    <div class="box_product_text">
                        <p class="preoduct_text"><b><?php

                                                    $sql = "SELECT proname, price,image,id FROM product where id=19";
                                                    $result = $con->query($sql);
                                              
                                                    if ($row = $result->fetch_assoc()) {
                                                        $id=$row["id"];
                                                        echo  $row["proname"] . ": " . $row["price"] . "€";
                                                        echo "<br><img class='img_pr'src=" . $row["image"] . ">";
                                                    } ?></b>
                        <form method="POST" action="../products/product_dec.php">
                            <input type="hidden" value="<?php echo $id; ?>" name="id" />
                            <input type="submit" value="Submit" />
                        </form>
                        </p>

                    </div>
                </div>
                <div class="box_product">
                    <div class="box_product_text">
                        <p class="preoduct_text"><b><?php

                                                    $sql = "SELECT proname, price,image,id FROM product where id=14";
                                                    $result = $con->query($sql);
                                              
                                                    if ($row = $result->fetch_assoc()) {
                                                        $id=$row["id"];
                                                        echo  $row["proname"] . ": " . $row["price"] . "€";
                                                        echo "<br><img class='img_pr'src=" . $row["image"] . ">";
                                                    } ?></b>
                        <form method="POST" action="../products/product_dec.php">
                            <input type="hidden" value="<?php echo $id; ?>" name="id" />
                            <input type="submit" value="Submit" />
                        </form>
                        </p>

                    </div>
                </div>

                <div class="box_product">
                    <div class="box_product_text">
                        <p class="preoduct_text"><b><?php

                                                    $sql = "SELECT proname, price,image,id FROM product where id=20";
                                                    $result = $con->query($sql);
                                              
                                                    if ($row = $result->fetch_assoc()) {
                                                        $id=$row["id"];
                                                        echo  $row["proname"] . ": " . $row["price"] . "€";
                                                        echo "<br><img class='img_pr'src=" . $row["image"] . ">";
                                                    } ?></b>
                        <form method="POST" action="../products/product_dec.php">
                            <input type="hidden" value="<?php echo $id; ?>" name="id" />
                            <input type="submit" value="Submit" />
                        </form>
                        </p>

                    </div>
                </div>



            </div>





            <div class="contenedor_row">
            <div class="box_product">
                    <div class="box_product_text">
                        <p class="preoduct_text"><b><?php

                                                    $sql = "SELECT proname, price,image,id FROM product where id=11";
                                                    $result = $con->query($sql);
                                              
                                                    if ($row = $result->fetch_assoc()) {
                                                        $id=$row["id"];
                                                        echo  $row["proname"] . ": " . $row["price"] . "€";
                                                        echo "<br><img class='img_pr'src=" . $row["image"] . ">";
                                                    } ?></b>
                        <form method="POST" action="../products/product_dec.php">
                            <input type="hidden" value="<?php echo $id; ?>" name="id" />
                            <input type="submit" value="Submit" />
                        </form>
                        </p>

                    </div>
                </div>
                <div class="box_product">
                    <div class="box_product_text">
                        <p class="preoduct_text"><b><?php

                                                    $sql = "SELECT proname, price,image,id FROM product where id=11";
                                                    $result = $con->query($sql);
                                              
                                                    if ($row = $result->fetch_assoc()) {
                                                        $id=$row["id"];
                                                        echo  $row["proname"] . ": " . $row["price"] . "€";
                                                        echo "<br><img class='img_pr'src=" . $row["image"] . ">";
                                                    } ?></b>
                        <form method="POST" action="../products/product_dec.php">
                            <input type="hidden" value="<?php echo $id; ?>" name="id" />
                            <input type="submit" value="Submit" />
                        </form>
                        </p>

                    </div>
                </div>
                <div class="box_product">
                    <div class="box_product_text">
                        <p class="preoduct_text"><b><?php

                                                    $sql = "SELECT proname, price,image,id FROM product where id=11";
                                                    $result = $con->query($sql);
                                              
                                                    if ($row = $result->fetch_assoc()) {
                                                        $id=$row["id"];
                                                        echo  $row["proname"] . ": " . $row["price"] . "€";
                                                        echo "<br><img class='img_pr'src=" . $row["image"] . ">";
                                                    } ?></b>
                        <form method="POST" action="../products/product_dec.php">
                            <input type="hidden" value="<?php echo $id; ?>" name="id" />
                            <input type="submit" value="Submit" />
                        </form>
                        </p>

                    </div>
                </div>





            </div>






        </div>


































    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
</body>

</html>