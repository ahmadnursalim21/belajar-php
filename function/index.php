<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>belajar function in php</title>
</head>

<body>
    <?php

    function sayHallo($nama, $umur, $alamat)
    {
        return $nama . " " . $umur . " " . $alamat;
    }
    ?>
    <p><?= sayHallo("Salim", 20, "wonogiri 1") ?></p>
    <p><?= sayHallo("Damar", 19, "wonogiri 2") ?></p>
</body>

</html>