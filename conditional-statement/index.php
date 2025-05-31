<?php


if (isset($_POST['kirim'])) {
    $nilai = $_POST['nilai'];
    $hasil = "";

    if ($nilai >= 80) {
        $hasil = "Nilai Kamu adalah A ";
    } elseif ($nilai >= 75) {
        $hasil = "Nilai Kamu adalah B";
    } elseif ($nilai >= 65) {
        $hasil = "Nilai Kamu adalah C";
    } elseif ($nilai >= 0) {
        $hasil = "Nilai Kamu adalah D";
    } else {
        $hasil = "Silahkan masukan angka yang valid";
    }
} else {
    $hasil = "Nilai Kamu belum dimasukan";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Ini adalah belajar conditional statement di php</h1>

    <form action="index.php" method="POST">
        <input type="text" name="nilai" placeholder="Masukan nilai anda">
        <button name="kirim">Kirim</button>
    </form>
    <p><?php echo $hasil ?></p>
</body>

</html>