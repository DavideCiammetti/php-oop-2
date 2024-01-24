<?php

    $database = file_get_contents(__DIR__.'/data.json');  

    $email = json_decode($database);

    if(isset($_GET['validate'])){

       
    }
    
    header('Content-Type: application/json');
    echo json_encode($email);
?>