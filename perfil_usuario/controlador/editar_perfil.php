<?php
    session_start();
    require_once "../../db.php";



    $type=$_FILES['img_up']['type'];
    $tmp_name = $_FILES['img_up']["tmp_name"];
    $name = $_FILES['img_up']["name"];
    //Creamos una nueva ruta (nuevo path)
    //Así guardaremos nuestra imagen en la carpeta "images"
    $nuevo_path="../../assets/picture_users/".$name;
    // $ruta_local="http://localhost/log/assets/picture_users/".$name;

    // $ruta_local="http://localhost/log/assets/picture_users/".$name;
    if($type==".php"){
	echo "formato no valido";
	}else{
    move_uploaded_file($tmp_name,$nuevo_path);
		}
    //Extraer la extensión del archivo. P.e: jpg
    # Con explode() segmentamos la cadena de acuerdo al separador que definamos. En este caso punto (.)
    $array=explode('.',$nuevo_path);
    # Capturamos el último elemento del array anterior que vendría a ser la extensión
    $ext= end($array);
    //Imprimimos un texto de subida exitosa.
    echo "<h3>USUARIO E IMAGEN SUBIDOS CORRECTAMENTE</h3>";
    // Los posible valores que puedes obtener de la imagen son:
    echo "<b>Info de la imagen subida:</b>";
    echo "<br> Nombre: ".$_FILES['img_up']["name"];      //nombre del archivo
    echo "<br> Tipo: ".$_FILES['img_up']["type"];      //tipo
    echo "<br> Nombre Temporal: ".$_FILES['img_up']["tmp_name"];  //nombre del archivo de la imagen temporal
    echo "<br> Tamanio: ".$_FILES['img_up']["size"]." bytes";      //tamaño
    
    


    
        $sql = "UPDATE users SET username = '" . trim($_POST['username']) . "' ,email = '" . trim($_POST['email']) . "',password = '" . trim(md5($_POST['password'])) . "',ruta_img = '" .    $nuevo_path . "' WHERE id = '" . $_POST['id'] . "'";
        if($con->query($sql)){
            echo "<script>alert('Successfully resolved')</script>";
            $_SESSION['username'] = $_POST['username'];
            header("Refresh:0 , url =../../view/userview.php");

            // header("Refresh:0 , url =../../logout.php");
      
            exit();

        }
        else{
            echo "<script>alert('Unsuccessful resolved')</script>";
            header("Refresh:0 , url =../adminusercontrol.php");
            exit();

        }
    
   
    mysqli_close($con);
?>
