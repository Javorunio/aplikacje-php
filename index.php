<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    for($i = 1; $i < 101; $i+=2){
        echo $i." ";
    }
    echo "<br>";
    
    for(;$i>0;$i-=4){
        echo $i." ";
    }
    ?>
</body>
</html>