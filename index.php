<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $wiek = 33;

    switch(true){
        case $wiek < 18: 
            echo "Jeszcze nie możesz głosować";
            break;
        case $wiek >= 18 && $wiek < 21: 
            echo "Możesz głosować";
            break;
        case $wiek >= 21 && $wiek < 30: 
            echo "Możesz głosować i kandydować do Sejmu";
            break;
        case $wiek >= 30 && $wiek < 35:
            echo "Możesz głosować i kandydować do Sejmu i Senatu";
            break;
        case $wiek >= 35:
            echo "Możesz głosować, kandydować do Sejmu i Senatu oraz
            na Prezydenta";
            break;
    }
    ?>
</body>
</html>