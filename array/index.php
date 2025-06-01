<?php

// ini aray bisa
$hewan = ['kambing', 'kucing', 'sapi', 'ayam'];


// ini aray associatif
$umur = [
    'salim' => 22,
    'alfan' => 21,
    'damar' => 20,
    'abdul' => 19,
];


// ini aray multidimensi
$biodata = [
    [
        'nama' => 'salim',
        'umur' => 21,
        'alamat' => 'wonogiri 1',
    ],
    [

        'nama' => 'alfan',
        'umur' => 20,
        'alamat' => 'kali bening',
    ],
    [

        'nama' => 'damar',
        'umur' => 20,
        'alamat' => 'wonogiri 2',
    ]
];


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Belajar array in php</h1>

    <p><?= $hewan[1] ?></p>
    <p><?= $umur['alfan'] ?></p>
    <ul>

        <?php foreach ($biodata as $bio): ?>

        <li><?= $bio['nama'] ?></li>
        <li><?= $bio['umur'] ?></li>
        <li><?= $bio['alamat'] ?></li>

        <?php endforeach ?>
    </ul>
</body>

</html>