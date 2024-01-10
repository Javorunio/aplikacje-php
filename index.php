<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $x = -2;
    $y = -10;

    switch (true){
        case $x > 0 && $y > 0:
            echo "Oś I";
            break;
        case $x < 0 && $y > 0:
            echo "Oś II";
            break;
        case $x < 0 && $y < 0:
            echo "Oś III";
            break;
        case $x > 0 && $y < 0:
            echo "Oś IV";
            break;
        case $x == 0 && $y == 0:
            echo "0";
            break;
        case $x == 0 && $y != 0:
            echo "OX";
            break;
        case $x != 0 && $y == 0:
            echo "OY";
            break;
    }
    ?>
</body>
</html>