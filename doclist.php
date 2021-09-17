<?php
error_reporting(0);
// Array with names
$doctor = [
    [
        "name" => "Muhammad Rayhand Prasetya",
        "specialist" => "Kulit",
        "email" => "rayhand@gmail.com"
    ],
    [
        "name" => "Lazuardi Muhammad Azizi",
        "specialist" => "Kulit",
        "email" => "ardi@gmail.com"
        
    ],
    [
        "name" => "Muhammad Fajar Hidayat",
        "specialist" => "Mata",
        "email" => "fajar@gmail.com"
    ]
];

// get the q parameter from URL
// $doc_list = $_POST['doctor'];


// var_dump($doc_list);
if (isset($_GET['doctor'])) {
    // $fajar = $_GET['fajar'];
    // $ardi = $_GET['ardi'];
    // $rayhand = $_GET['rayhand'];

    if($_GET['fajar'] == $_GET['fajar']) {
        echo $doctor[2]['name']."</br>";
        echo $doctor[2]['specialist']."</br>";
        echo $docotr[2]['email']."</br>";
    }

}

?>