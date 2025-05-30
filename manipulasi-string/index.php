<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $namaDepan = "Ahmad Nur";
    $namaBelakang = "Salim";
    // menggabungkan nama depan dan nama belakang
    $namaLengkap = $namaDepan . " " . $namaBelakang;
    $namaPanjang = "$namaDepan $namaBelakang";

    $kalimat = "saya ini belajar bahasa PHP";
    $kalimatBaru = str_replace("PHP", "Javascript", $kalimat);

    ?>

    <p><?= $namaLengkap ?></p>
    <p>Ini menggunakan " " <?= $namaPanjang ?></p>
    <p><?= $kalimatBaru ?></p>
    <p><?= strtoupper($namaBelakang) ?></p>
    <p><?= strtolower($namaBelakang) ?></p>
    <p><?= strlen($namaBelakang) ?></p>
</body>

</html>