<?php
    session_start();
    require_once "../../db.php";
  

//capturamos los datos del fichero subido    
$type=$_FILES['img_up']['type'];
$tmp_name = $_FILES['img_up']["tmp_name"];
$name = $_FILES['img_up']["name"];
//Creamos una nueva ruta (nuevo path)
//Así guardaremos nuestra imagen en la carpeta "images"
$nuevo_path="C:/xampp/htdocs/log/assets/picture_users/".$name;
// $ruta_local="http://localhost/log/assets/picture_users/".$name;
$ruta_local="./../assets/picture_users/".$name;
// $ruta_local="http://localhost/log/assets/picture_users/".$name;

move_uploaded_file($tmp_name,$nuevo_path);
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





    if($_POST['username'] != null && $_POST['email'] != null ){
        $sql = "INSERT INTO users (username,email,password,usertype,ruta_img) VALUES ('". trim($_POST['username']). "','". trim($_POST['email']). "','". trim(md5($_POST['password']))."','". trim($_POST['usertype'])."','".$nuevo_path."')";
        if($con->query($sql)){
            echo "<script>alert('El insert se ejecutó correctamente')</script>";
            header("Refresh:0 , url = ../adminusercontrol.php");
            exit();

        }
        else{
            echo "<script>alert('Add failed')</script>";
            header("Refresh:0 , url = ../adminusercontrol.php");
            exit();

        }
    }
    else{
        echo "<script>alert('Please fill in information.')</script>";
        header("Refresh:0 , url = ../adminusercontrol.php");
        exit();

    }
    mysqli_close($con);
?>

