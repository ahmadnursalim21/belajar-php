<?php

if (!isset($_POST['submit'])) {
    echo "Silahkan isi form terlebih dahulu";
} else {
    $name = $_POST['name'];
    $password = $_POST['password'];
    echo "Nama =" . $name . "<br>" . "Password= " . $password;
}




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validasi Form PHP</title>
</head>

<body>

    <h1>Belajar validasi form in php</h1>
    <form action="index.php" method="post">
        <div>
            <label for="name">Nama</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
        </div>

        <div>
            <button type="submit" name="submit">Kirim</button>
        </div>
    </form>
</body>

</html>