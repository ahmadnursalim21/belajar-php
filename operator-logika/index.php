<?php
$a = 5;
$a = 2;


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        <?php var_dump($a && $b) ?>
    </h1>
    <h1>
        <?php var_dump($a || $b) ?>
    </h1>
    <h1>
        <?php var_dump(!$a) ?>
    </h1>
    <h1>
        <?php var_dump($a xor $b) ?>
    </h1>

</body>

</html>