<?php

setcookie("name_user", "salim", time() + (86400), "/");


if (isset($_COOKIE['name_user'])) {
    echo "cookie anda adalah" . " " . $_COOKIE['name_user'];
} else {
    echo "cookie anda belum ada";
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

    <p><?php echo $_COOKIE['name_user'] ?></p>

</body>

</html>