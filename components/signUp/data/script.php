<?php

    $database = file_get_contents(__DIR__.'/data.json');  

    $email = json_decode($database);
    $errors = false;

    if(isset($_POST['create'])){
        $newEmail = $_POST['newEmail'];
        $newPassword = $_POST['newPassword'];

        if ((!empty($newEmail) && !empty($newPassword)) && strlen($newPassword) > 8 ) {
            $newData = [
                'email' => $newEmail,
                'password' => $newPassword,
            ];
    
            $email[] = $newData;

            file_put_contents('data.json', json_encode($email));
        } else {
            $errors = true;
        }
          
    }
    
$results = [
    'user' => $email,
    'errors' => $errors
];

    header('Content-Type: application/json');
    echo json_encode($results);
?>