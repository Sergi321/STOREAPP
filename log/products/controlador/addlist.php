<?php
    session_start();
    require_once "../../db.php";
  
    $type=$_FILES['img_up']['type'];
    $tmp_name = $_FILES['img_up']["tmp_name"];
    $name = $_FILES['img_up']["name"];
    //Creamos una nueva ruta (nuevo path)
    //Así guardaremos nuestra imagen en la carpeta "images"
    $nuevo_path="C:/xampp/htdocs/log/assets/productos/tecnologia/".$name;
    // $ruta_local="http://localhost/log/assets/picture_users/".$name;
    $ruta_local="http://localhost/log/assets/productos/tecnologia/".$name;
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
    
    






    if($_POST['name'] != null && $_POST['amount'] != null ){
        $sql = "INSERT INTO product (proname,amount,price,image) VALUES ('". trim($_POST['name']). "','". trim($_POST['amount']). "','". trim($_POST['price'])."','".$ruta_local."')";
        if($con->query($sql)){
            echo "<script>alert('Success added')</script>";
            header("Refresh:0 , url = ../admincontrol.php");
            exit();

        }
        else{
            echo "<script>alert('Add failed')</script>";
            header("Refresh:0 , url = ../admincontrol.php");
            exit();

        }
    }
    else{
        echo "<script>alert('Please fill in information.')</script>";
        header("Refresh:0 , url = ../admincontrol.php");
        exit();

    }
    mysqli_close($con);
?>