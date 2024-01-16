<?php
    require_once __DIR__. '/Models/categories.php';
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
    <p><?php echo $product1-> getType(); ?></p>
    <p><?php echo $product1-> getCategory(); ?></p>
    <p><?php echo $product1-> getTitle(); ?></p>
    <p><?php echo $product1-> getPrice(); ?></p>
    <p><?php echo $product1-> getImage(); ?></p>
</body>
</html>