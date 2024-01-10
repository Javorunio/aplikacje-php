<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a = 5;
    $b = 0;
    $c = 3;
    if($a == 0 || $b == 0 || $c ==0){
        echo "Nie";
    }
    else if($a + $b <= $c || $a + $c <= $b || $b + $c <= $a){
        echo "Nie";
    }
    else
    {
        echo "Tak";
    }
    ?>
</body>
</html>