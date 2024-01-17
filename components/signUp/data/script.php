<?php

    $database = file_get_contents(__DIR__.'/data.json');  

    $email = json_decode($database);

    if(isset($_POST['create'])){

        $newEmail = $_POST['newEmail'];
        $newPassword = $_POST['newPassword'];

        $newData = [
            'email'=> $newEmail,
            'password'=> $newPassword,
        ];

        $email[] = $newData;
        
        file_put_contents('data.json',json_encode($email));
          
    }
    
    header('Content-Type: application/json');
    echo json_encode($email);
?>