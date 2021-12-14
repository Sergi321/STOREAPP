
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="">
    <title>Carrito</title>
</head>
<body>
<?php 
  include_once '../db.php';
	$id=$_POST['id'];
	$name_product=$_POST['name_product'];
	$desc=$_POST['desc'];
	$price=$_POST['price'];

	echo $id;
	echo $name_product;
	echo $desc;
	echo $price;





	
?>
         



</body>

</html>