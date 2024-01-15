<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    for($n = 10; $n > 0; $n--){
        echo $n**2;
        echo " ";
    }
    echo "<br>";

    for($n = 10; $n > 0; $n-=2){
        echo $n**2;
        echo " ";
    }
    ?>
</body>
</html>