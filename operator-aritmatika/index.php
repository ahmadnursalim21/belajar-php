<?php

$a = 10;
$b = 5;

$c = 2;
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ini belajar PHP operator aritmatika</title>
</head>

<body>

    <?php
    $tambah = $a + $b;
    $kurang = $a - $b;
    $kali = $a * $b;
    $bagi = $a / $b;

    $modulus = $a % $c;
    $pangkat = $c ** $c;


    ?>

    <p>Ini penjumlahan dari 10 dan 5 | <?= $tambah ?></p>
    <p>Ini pengurangan dari 10 dan 5 | <?= $kurang ?></p>
    <p>Ini perkalian dari 10 dan 5 | <?= $kali ?></p>
    <p>Ini pembagian dari 10 dan 5 | <?= $bagi ?></p>

    <p>modulus dari 10 % 2 adalah <?= $modulus ?></p>
    <p>pangkat dari 2**2 adalah <?= $pangkat ?></p>

</body>

</html>