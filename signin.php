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

foreach ($user as $s) {
    echo $s['name'];
    echo "</br>";
    echo $s['email'];
    echo "</br>";
    echo $s['password'];
    echo "</br>";
}

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];
    if ($email == $user[0]['email'] && $pass == $user[0]['password'] ) {
        # code...
        header('Location: index.html');
    }

    elseif ($email == $user[1]['email'] && $pass == $user[1]['password'] ) {
        header('Location: index.html');
    }

    elseif ($email == $user[2]['email'] && $pass == $user[2]['password']) {
        echo "<script>
            alert('berhasil masuk');
        </script>";
        header('Location: index.html');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1 style="z-index: 100">PAGE NOT FOUND 404!</h1>


<div class="box-logo"
     style="height: 100%; width: 500px;
    left: 0px; top: 0px;
    position: absolute;
    background-color: transparent;"
         >
    <img src="" alt="">
</div>

<div class="box-image">
    <img src="" alt="">
</div>

<div class="box-form"
     style="position: absolute;
    width: 300px; height: 300px;
    left: 900px; top: 220px;

    background-color: #F8F8F8;
    border: 1px solid #000000;
    box-sizing: border-box;
    box-shadow: 0px 4px 4px #000000;
    border-radius: 32px;"
         >
    <form action="" method="POST">
        <h1 align="center">Login</h1>
        <ul style='list-style: none;'>
            <li>
                <label for="email" name="email" style="display: block; margin-bottom: 5px;">Email: </label>
            </li>
            <li>
                <input type="email" name="email" id="email" style="display: block; margin-bottom: 15px;">
            </li>
            <li>
                <label for="password" style="display: block; margin-bottom: 5px;">Password: </label>
            </li>
            <li>
                <input type="password" name="password" id="password" style="display: block; margin-bottom: 20px;">
            </li>
            <li>
                <button type="submit" name="login" onclick="login()">Login</button>
            </li>
        </ul>
        <p align="center"><a href="">Forgot password?</a></p>
    </form>
</div>
<div id="test"></div>

</body>
</html>