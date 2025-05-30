<?php
$nama = "salim";
$umur = 20;

$nilai = 85.5;

$hewan = ['ayam', 'babi', 'singa', 'anjing'];

$lulus = true;

echo $lulus;



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p><?= gettype($nama) ?></p>
    <p><?= gettype($umur) ?></p>
    <p><?= gettype($nilai) ?></p>
    <p><?= var_dump(is_int($umur)) ?></p>
    <p><?= var_dump(is_int($nama)) ?></p>
    <p><?= gettype($hewan) ?></p>
    <p><?= var_dump(is_array($hewan)) ?></p>
</body>

</html>