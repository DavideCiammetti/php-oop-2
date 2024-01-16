<?php
    require_once __DIR__. '/Models/productType.php';
    $product1 = new ProductTypes('prodotto per cani', './img/logoSezioni/cane.logo.jpg','Pets imperial', 12, './img/cuccePerCani/pets_imperial.jpg', 'cuccia per cani');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poly&display=swap" rel="stylesheet">
    <!-- /google fonts -->
    <title>shop</title>
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
    <main>
    <div class="list-container">
        <ul>
            <li class="type-of-prodotto">
                <p>
                    <?php echo $product1-> getType(); ?>
                </p>
            </li>
            <li>
               <div class="logo-container">
                    <img src="<?php echo $product1-> getCategory(); ?>" alt="cane.img">
               </div>
            </li>
            <li>  
               <div>
                <div class="product-image-container">
                        <img src="<?php echo $product1-> getImage(); ?>" alt="cuccia.img">
                </div>
                <div class="prodact-info">
                    <p class="mt-10"> nome prodotto: <span class="font-s-16"><?php echo $product1-> getTitle(); ?></span></p>
                    <p class="mt-10">prezzo: <span class="font-s-16"><?php echo $product1-> getPrice();?>€</span></p>
                    <p class="mt-10">tipo: <span class="font-s-16"><?php echo $product1-> getProdType(); ?></span></p>
                </div>
               </div>
            </li>
        </ul>
   </div>
    </main>
</body>
</html>