<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="../external/perfil.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="h">
        <div class="box_profile">

            <?php
            include_once '../db.php';
            session_start();
            if ($_SESSION['username'] == null) {
                echo "<script>alert('Please login.');</script>";
                header("Refresh:0 , url=index.html");
            }
            $username = $_SESSION['username'];

            $sql = "SELECT id,username,email,ruta_img FROM users where username='" . $username . "'";
            $result = $con->query($sql);


            if ($row = $result->fetch_assoc()) {
                $id = $row["id"];
                $user = $row["username"];
                $email = $row["email"];
                $img = $row["ruta_img"];
            }


            ?>

            <p class="title"><b><?php echo $username; ?> | CONFIGURACIÓN USUARIO</b></p>
            <form class="formulario" method="POST" enctype="multipart/form-data" action="controlador/editar_perfil.php">
                <div class="container_boxes">

                    <div class="inputs">
                        <input type="text" name="username" value="<?php echo $user; ?>" required>
                        <input type="hidden" value="<?php echo $id; ?>" name="id" />
                        <input type="text" name="email" value="<?php echo $email; ?>" required>
                        <input type="text" name="password" placeholder="password" required>
                        <div class="subir_archivo">
                            <input type="file" name="img_up">
                        </div>
                    </div>

                    <div class="box_picture">
                        <?php echo "<img class='picture'src=" . $img . ">"; ?>
                    </div>



                </div>

                <div class="container_buttons">
                    <button class="button"> Guardar Cambios</button>
                    <button class="button" onclick="window.location.href='../view/userview.php';"> Volver al menú</button>
                </div>
            </form>














        </div>
    </div>
</body>

</html>