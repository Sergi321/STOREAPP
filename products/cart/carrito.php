<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../external/header/header.css">
    <link rel="stylesheet" href="../../external/cart.css">
    <title>Carrito</title>
</head>

<body>






    <?php
    include_once '../db.php';
    $id = $_POST['id'];
    $name_product = $_POST['name_product'];
    $desc = $_POST['desc'];
    $price = $_POST['price'];
    $stock = $_POST['amount'];

    $selected = $_POST['quantity'];
    $totalprice =  $price * $selected;
    $newstock = $stock - $selected;
    ?>
    <div class="container-ticket">
        <div class="ticket">
            <p class="total"><b> <?php echo $name_product; ?></b></p>
            <p class="total"> Precio: <?php echo $price; ?>€</p>
            <p class="total">Cantidad seleccionada: <?php echo $selected; ?></p>
            <p class="descip"> <?php echo $desc; ?></p>
            <p class="total"><B>PRECIO TOTAL: <span class="green"><?php echo $totalprice; ?>€</span></B></p>
            <button class="comprarboton" onclick="buy()"><b>COMPRAR</b></button>
        </div>
    </div>
	
	
<a href="https://storeapp.es/view/userview.php" class="cback">Volver a la pagina</a>

    <p id="demo"></p>
    <script>
        function buy() {
          
            if (<?php echo $selected; ?> <= 0) {
                alert("Cantidad seleccionada incorrecta!");
          
            } if(<?php echo $stock; ?> >=  <?php echo $selected; ?> && <?php echo $selected; ?> > 0){
                alert("Comprado!");
				
            }else{
                alert("No hay suficiente stock");
            }
        }
    </script>










</body>

</html>