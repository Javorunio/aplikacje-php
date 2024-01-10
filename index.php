<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $plusy = 6;

    switch(true){
        case $plusy <=9:
            for($i = 0; $i < $plusy; $i++){
                echo "+";
            }
            break;
        case $plusy > 9:
            echo "Wartość poza zakresem";
            break;
    }
    ?>
</body>
</html>