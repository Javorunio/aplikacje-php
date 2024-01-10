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
            echo "Ocena niedostateczna";
            break;
        case $ocena == 2:
            echo "Ocena dopuszczająca";
            break;
        case $ocena == 3:
            echo "Ocena dostateczna";
            break;
        case $ocena == 4:
            echo "Ocena dobrar";
            break;
        case $ocena == 5:
            echo "Ocena bardzo dobra";
            break;
        case $ocena == 6:
            echo "Ocena celująca";
            break;
    }
    ?>
</body>
</html>