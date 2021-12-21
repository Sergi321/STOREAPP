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


            <p class="title"><b>STOREAPP USER ADMIN CONTROL</b></p>
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
                $sql_fetch_todos = "SELECT * FROM users ORDER BY id ASC";
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
                        <h1 class="title_productos">Usuarios:</h1>
                        <h2 class="title_productos">Conectado como: [<?php echo $username ?>]</h2>
                    </div>
                    <div class="table_info">
                        <table>



                            <?php
                            $idpro = 1;
                            while ($row = mysqli_fetch_array($query)) { ?>

                                <tr>

                                    <td><b>ID:</b><?php echo $row['id'] ?></td>
                                    <td><b>Usuario:</b><?php echo $row['username'] ?></td>
                                    <td><b>Correo:</b><?php echo $row['email'] ?></td>
                                    <td><b>Contraseña:</b><?php echo $row['password'];?></td>
                                    <td><b>Rol:</b><?php echo $row['usertype'];?></td>
        
                                    <td class="modify"><a name="edit" id="" class="bfix" href="fix.php?id=<?php echo $row['id'] ?>&message=<?php echo $row['username'] ?>&amount=<?php echo $row['email'] ?> &price=<?php echo $row['password']; ?> &price=<?php echo $row['usertype']; ?>" role="button">
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
            <a name="" id="" class="Añadir productos" href="addlist.php" role="button">Añadir Usuarios</a>
            <a name="" id="" class="Añadir productos" href="../view/adminhome.php" role="button">AdminHome</a>
            <a name="" id="" class="Volver al menú" href="../view/userview.php" role="button">Volver a la tienda</a>
            </div>















        </div>
    </div>
</body>

</html>