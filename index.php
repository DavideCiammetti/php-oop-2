<?php
    require_once __DIR__. '/Models/game.php';
    require_once __DIR__. '/Models/food.php';
    require_once __DIR__. '/Models/categories.php';

        $gioco_cane = new Categories('gioco per cani', 'cane', '<i class="fa-solid fa-dog fs-2"></i>');
        $cibo_gatto = new Categories('cibo per gatti', 'gatto','<i class="fa-solid fa-cat fs-2"></i>');

        $newGame = new Game('palla per cani', 12, 'img/giochiCani/palla-con-corda.jpg', 'made in italy',$gioco_cane);
        $newFood = new Food( 'friskis croccantini',22.99, 'img/ciboGatti/sheba.jpg','vitello, tacchino','giapan',$cibo_gatto);
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
    <main class="d-flex">
        <?php foreach ($newArray as $value) { ?>
            
            <div class="card p-3 m-4 border-black border-5" style="width: 18rem;">
            <p>
                <span class="fs-5">
                    <?php 
                        echo $value->getCategories()->getType();
                    ?>
                 </span>
                 <!-- icona -->
                 <span>
                 <?php 
                        echo $value->getCategories()->getCategory();
                    ?>
                 </span>
            </p>
               <div class="img-container">
                    <img src="<?php echo $value->getImage();?>"  class="card-img-top" alt="img">
               </div>
                <p>descrizione:  <span class="fs-5"><?php echo $value->getTitle();?></span></p>
                <p>prezzo:<span class="fs-5"><?php echo $value->getPrice(); ?>€</span></p>
                <p>tipo di prodotto: <span class="fs-5"><?php echo $value->getCategories()->getProductType(); ?></span></p>
                <p>made in: <span class="fs-5"><?php echo $value->getMadeIn(); ?></span></p>
                <div class="card-body">
                </div>
            </div>

        <?php } ?>
    </main>
</body>
</html>