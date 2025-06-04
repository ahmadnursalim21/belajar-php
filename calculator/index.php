<?php
$hasil = '';
if (isset($_POST['submit'])) {
    $angka1 = $_POST['number1'];
    $angka2 = $_POST['number2'];


    if (is_numeric($angka1) && is_numeric($angka2)) {
        $operator = $_POST['operator'];
        switch ($operator) {
            case 'tambah':
                $hasil = $angka1 + $angka2;
                break;
            case 'kurang':
                $hasil = $angka1 - $angka2;
                break;
            case 'kali':

                $hasil = $angka1 * $angka2;
                break;
            case 'bagi':
                $hasil = $angka1 / $angka2;
                break;
        }
    } else {
        $hasil = "Input harus berupa angka!";
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="calculator-container">
        <h1>Mini Project Calculator</h1>
        <form action="index.php" method="POST">
            <div class="input-group">
                <input type="text" name="number1" placeholder="Masukan Angka Pertama">
            </div>
            <div class="input-group">
                <input type="text" name="number2" placeholder="Masukan Angka Kedua">
            </div>
            <div class="input-group">
                <select name="operator">
                    <option value="tambah">Tambah</option>
                    <option value="kurang">Kurang</option>
                    <option value="kali">Kali</option>
                    <option value="bagi">Bagi</option>
                </select>
            </div>
            <div>
                <button type="submit" name="submit">Hitung</button>
            </div>
            <div class="result-container">
                <p>Hasil : <?= $hasil ?></p>
            </div>
        </form>
    </div>


</body>

</html>