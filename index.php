<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $miesiac = 10;

    switch(true){
        case $miesiac == 1 || $miesiac == 2 || $miesiac == 3:
            echo "Pierwszy kwartał";
            break;
        case $miesiac == 4 || $miesiac == 5 || $miesiac == 6:
            echo "Drugi kwartał";
            break;
        case $miesiac == 7 || $miesiac == 8 || $miesiac == 9:
            echo "Trzeci kwartał";
            break;
        case $miesiac == 10 || $miesiac == 11 || $miesiac == 12:
            echo "Czwarty kwartał";
            break;
    }
    ?>
</body>
</html>