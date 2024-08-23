<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $numero1 = 10;
    $numero2 = 30;
    $operaçãosoma = $numero1+$numero2;
    $operaçãosubtração = $numero1-$numero2;
    $operaçãomultiplicação = $numero1*$numero2;
    $operaçãodivisão = $numero1/$numero2;

    echo "<p> numero1 = $numero1 numero2 = $numero2 </p>";

    echo "<p> Soma $operaçãosoma </p>";
    echo "<p> Divisão $operaçãodivisão </p>";
    echo "<p> Multiplicação $operaçãomultiplicação </p>";
    echo "<p> Subtração $operaçãosubtração </p>";

    ?>
</body>
</html>