<?php
$a = 5;
$b = 2;
$c = 2;
$d = "5"

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1><?php var_dump($a == $b) ?></h1>
    <h1><?php var_dump($a != $b) ?></h1>
    <h1><?php var_dump($a === $d) ?></h1>
    <h1><?php var_dump($b === $c) ?></h1>
    <h1><?php var_dump($b < $c) ?></h1>
    <h1><?php var_dump($a > $c) ?></h1>
    <h1><?php var_dump($b >= $c) ?></h1>
    <h1><?php var_dump($a <= $c) ?></h1>

</body>

</html>