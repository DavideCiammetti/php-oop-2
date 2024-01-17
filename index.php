<?php
    require_once __DIR__. '/Models/game.php';

        $newGame = new Game('palla per cani', 12, 'immagine prodotto', '30cm x 25cm', 'made in italy',$gioco_cane);
        // DA ELIMINARE SOLO PER PROVA
        // $product1 = new ProductTypes('prodotto per cani', './img/logoSezioni/cane.logo.jpg','Pets imperial', 12, './img/cuccePerCani/pets_imperial.jpg', 'cuccia per cani');
        // $product2 = new ProductTypes('prodotto per gatti', './img/logoSezioni/cat.logo.png', 'cat imperial', 17,'./img/cucceGatti/cuccia_gatti.jpg', 'cuccia per gatti');
        // var_dump($newGame);
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
        <div class="card" style="width: 18rem;">
            <!-- <img src="..." class="card-img-top" alt="..."> -->
            img
            <p><?php echo $newGame->getDimension(); ?></p>
            <p><?php echo $newGame->getMadeIn(); ?></p>
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text"></p>
            </div>
        </div>
    </main>
</body>
</html>