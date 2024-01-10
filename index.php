<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $ocena = 1;

    switch(true){
        case $ocena == 1:
            echo "Brak promocji do następnej klasy";
            break;
        case $ocena > 1 && $ocena < 6:
            echo "Promocja do następnej klasy";
            break;
        case $ocena == 6:
            echo "Promocja z oceną celującą";
            break;
    }
    ?>
</body>
</html>