<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $kwota = 100;
    $waluta = "dolar";

    switch($waluta){
        case "dolar":
            $kwota *= 4.05;
            echo $kwota."$";
            break;
        case "euro":
            $kwota *= 4.45;
            echo $kwota."€";
            break;
        case "funty":
            $kwota *= 5.05;
            echo $kwota."£";
            break;
    }
    ?>
</body>
</html>