<?php
    require_once __DIR__. '/Models/game.php';
    require_once __DIR__. '/Models/food.php';
    require_once __DIR__. '/Models/categories.php';

        $gioco_cane = new Categories('gioco per cani', 'cane', '<i class="fa-solid fa-dog"></i>');
        $cibo_gatto = new Categories('cibo per gatti', 'gatto','<i class="fa-solid fa-cat"></i>');
        $newGame = new Game('palla per cani', 12, 'immagine prodotto', '30cm x 25cm', 'made in italy',$gioco_cane);

        $newFood = new Food( 'friskis croccantini',22.99, 'immagine','tonno, mais','made in: giapan',$cibo_gatto);
        // DA ELIMINARE SOLO PER PROVA
        // $product1 = new ProductTypes('prodotto per cani', './img/logoSezioni/cane.logo.jpg','Pets imperial', 12, './img/cuccePerCani/pets_imperial.jpg', 'cuccia per cani');
        // $product2 = new ProductTypes('prodotto per gatti', './img/logoSezioni/cat.logo.png', 'cat imperial', 17,'./img/cucceGatti/cuccia_gatti.jpg', 'cuccia per gatti');
        $newArray = [ $newGame, $newFood];
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
    <!-- cdn fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- /font awesome -->
    <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- /bootstrap -->
    <title>shop</title>
    <!-- my style -->
        <link rel="stylesheet" href="./style/style.css">
    <!-- my style -->
</head>
<body>
    <?php
        require_once __DIR__. '/components/header.php';
    ?>
    <main>
        <?php foreach ($newArray as $value) { ?>
            
            <div class="card" style="width: 18rem;">
            <p><span><?php echo $value->getCategories()->getCategory(); ?>c</span></p>
                <!-- <img src="..." class="card-img-top" alt="..."> -->
                img
                <p><?php echo $value->getPrice(); ?></p>
                <p><?php echo $value->getMadeIn(); ?></p>
                <p><?php echo $newFood->getIngredients();?></p>
                <div class="card-body">
                </div>
            </div>

        <?php } ?>
    </main>
</body>
</html>