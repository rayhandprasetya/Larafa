<?php

$user = [
    [   
        "name" => "Muhammad Rayhand Prasetya",
        "email" => "rayhand@gmail.com",
        "password" => "rayhand123"
    ],
    [
        "name" => "Lazuardi Muhammad Azizi",
        "email" => "ardi@gmail.com",
        "password" => "ardi123"
    ],
    [
        "name" => "Muhammad Fajar Hidayat",
        "email" => "fajar@gmail.com",
        "password" => "fajar123"
    ]

];

    // var_dump($user);




    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $pass = $_POST['password'];
        if ($email == $user[0]['email'] && $pass == $user[0]['password'] ) { 
            # code...
            header('index.html');
        }
        
        elseif ($email == $user[1]['email'] && $pass == $user[1]['pass'] ) {
        header('index.html');
        }

        elseif ($email == $user[2]['email'] && $pass == $user[2]['pass']) {
        header('index.html');
        }
    }

?>
