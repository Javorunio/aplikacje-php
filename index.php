<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    for($i = 0; $i < 11; $i++){
        echo "[$i] ";
        for($j = 1; $j < 11; $j++){
            if($i == 0){
                echo "[$j] ";
            }
            else{
                $wynik = $i * $j;
                echo ".$wynik. ";
            }
        }
        echo "<br/>";
    }
    ?>
</body>
</html>