<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $numero = 5;

    for ($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;

        echo "<p>$i x $numero = $resultado</p>";
    }
    ?>
</body>
</html>