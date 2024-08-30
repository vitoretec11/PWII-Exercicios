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

    $nota = 5;

    if($nota >= 90 && $nota <= 100)
    {
        echo "Nota é A!";
    }
    else if ($nota >= 80 && $nota <= 90 )
    {
        echo "Nota é B!";
        .
    }
    else if ($nota >= 70 && $nota <= 79)
    {
        echo "Nota é C!";
    }

    else if ($nota >= 60 && $nota <= 69)
    {
        echo "Nota é D!";
    }

    else 
    {
        echo "Nota é F!";
    }

    ?>
</body>
</html>