<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $metry = 1;
    $jednostka = "stopa";

    switch($jednostka){
        case "cal":
            $wynik = $metry * 100 / 2.54;
            echo $wynik." cali";
            break;
        case "stopa":
            $wynik = $metry * 100 / 30;
            echo $wynik." stóp";
            break;
        case "mila morska":
            $wynik = $metry /1852;
            echo $wynik." mil morskich";
            break;
        }
    ?>
</body>
</html>