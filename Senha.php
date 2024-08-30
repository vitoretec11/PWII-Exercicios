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
    $senha = "teste12390";
    $tamanho = 9;
    if (strlen($senha) >= $tamanho){
        echo "A senha atende o tamanho mínimo";
    }
    else{
        echo "A senha não atende o tamanho mínimo";
    }
    ?>
</body>
</html>