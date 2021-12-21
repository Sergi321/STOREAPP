<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="../external/perfil.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Perfil</title>
</head>

<body>


    <?php
    include_once '../db.php';
    session_start();

    $username = $_SESSION['username'];

    $sql = "SELECT id,username,email FROM users where username='" . $username . "'";
    $result = $con->query($sql);


    if ($row = $result->fetch_assoc()) {
        $id = $row["id"];
        $user = $row["username"];
        $email = $row["email"];
    }


    ?>



    <div class="blur_square">
        <div class="box_form">
            <p class="title"><b><?php echo $username; ?> | CONFIGURACIÓN USUARIO</b></p>

            <form method="POST" enctype="multipart/form-data" action="controlador/editar_perfil.php">



                <input type="text" name="username" value="<?php echo $user; ?>" required>
                <input type="hidden" value="<?php echo $id; ?>" name="id" />
                <input type="text" name="email" value="<?php echo $email; ?>" required>
                <input type="password" name="password" placeholder="password" required>
                
					<label for="file-upload" class="custom-file-upload">
						<b>SUBIR ARCHIVO</b>
</label>
                    <input id="file-upload" type="file" name="img_up">
             
				<button class="button"> <b>GUARDAR</b></button>
                <button class="button" onclick="window.location.href='../view/userview.php';"> <b>VOLVER</b></button>
            </form>

        </div>



</body>

</html>