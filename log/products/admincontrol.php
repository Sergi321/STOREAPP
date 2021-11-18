<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="../external/admincontrol.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Control</title>
</head>

<body>
    <div class="h">
        <div class="box_profile">


            <p class="title"><b>STOREAPP PRODUCT ADMIN CONTROL</b></p>
            <div class="container_boxes">


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
                    <title>CRUD Operation</title>
                    <!-- Required meta tags -->
                    <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                    <link rel="icon" href="dp.png">
                    <link href="https://fonts.googleapis.com/css2?family=Mitr&display=swap" rel="stylesheet">

                </head>

                <body>

                    <div class="container">
                        <h1 class="title_productos">PRODUCTOS:</h1>
                        <h2 class="title_productos">Ususario: [<?php echo $username ?>]</h2>
                    </div>
                    <div class="table_info">
                        <table>



                            <?php
                            $idpro = 1;
                            while ($row = mysqli_fetch_array($query)) { ?>

                                <tr>

                                    <td><b>ID:</b><?php echo $row['id'] ?></td>
                                    <td><b>Producto:</b><?php echo $row['proname'] ?></td>
                                    <td><b>Cantidad:</b><?php echo $row['amount'] ?></td>
                                    <td><b>Precio:</b><?php echo $row['price'];?>€</td>
                                    <td><b>Imagen:</b><?php echo $row['image'];?></td>
                                    <td class="timeregis"><b>Subido el:</b><?php echo $row['time'] ?></td>
                                    <td class="modify"><a name="edit" id="" class="bfix" href="fix.php?id=<?php echo $row['id'] ?>&message=<?php echo $row['proname'] ?>&amount=<?php echo $row['amount'] ?> &price=<?php echo $row['price']; ?> &image=<?php echo $row['image'] ?> " role="button">
                                            Editar
                                        </a></td>
                                    <td class="delete"><a name="id" id="" class="bdelete" href="delete.php?id=<?php echo $row['id'] ?>" role="button">
                                            Borrar
                                        </a></td>
                                </tr>

                            <?php
                                $idpro++;
                            } ?>

                        </table>
                        
               
                    </div>
                    <?php
                    mysqli_close($con);
                    ?>
                </body>

                </html>













            </div>

            <div class="container_buttons">
            <a name="" id="" class="Añadir productos" href="addlist.php" role="button">Añadir productos</a>
            <a name="" id="" class="Añadir productos" href="../view/adminhome.php" role="button">AdminHome</a>
            <a name="" id="" class="Volver al menú" href="../view/userview.php" role="button">Volver a la tineda</a>
            </div>















        </div>
    </div>
</body>

</html>