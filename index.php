<?php
    require_once __DIR__. '/Models/productType.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shop</title>
</head>
<body>
    <h3>product</h3>
   <div>
        <ul>
            <li>reparto: <?php echo $product1-> getType(); ?></li>
            <li>logoCane: <?php echo $product1-> getCategory(); ?></li>
            <li>titolo prodotto: <?php echo $product1-> getTitle(); ?></li>
            <li>prezzo prodotto: <?php echo $product1-> getPrice(); ?></li>
            <li>immagine prodotto: <?php echo $product1-> getImage(); ?></li>
            <li>tipo del prodotto: <?php echo $product1-> getProdType(); ?></li>
        </ul>
   </div>
</body>
</html>