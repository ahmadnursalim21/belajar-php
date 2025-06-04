<?php
session_start();
$_SESSION['name'] = " salim";
$_SESSION['email'] = "salim@gmail.com";



if (isset($_SESSION['name']) && isset($_SESSION['email'])) {
    echo "Selamat datang " . $_SESSION['name'] . "<br>";
    echo "Email anda adalah " . $_SESSION['email'];
} else {
    echo "Silahkan login terlebih dahulu";
}

unset($_SESSION['name']);
echo "Selamat datang " . $_SESSION['name'] . "<br>";
echo "Email anda adalah " . $_SESSION['email'];
session_destroy();
$_SESSION = [];
echo "Selamat datang " . $_SESSION['name'] . "<br>";
echo "Email anda adalah " . $_SESSION['email'];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>