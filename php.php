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

$email = $_POST['email'];
$pass = $_POST['password'];
$button = $_POST['login'];

    if (isset($email == "rayhand@gmail.com") && isset($pass == "rayhand123")) {
        header('index.html');
    }
    elseif (isset($email == "ardi@gmail.com") && isset($pass == "ardi123")) {
        header('index.html');
    }
    elseif (isset($email == "fajar@gmail.com") && isset($pass == "fajar123")) {
        header('index.html');
    }