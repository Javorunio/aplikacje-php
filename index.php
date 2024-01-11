<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
        $suma = 0;
        for ($i = 1; $i <= 10; $i++) 
        { 
            if ($i % 2 == 0) $suma += $i; else continue;
            if ($i <= 10) echo "Suma: $suma <br/>";
        }
        ?>
</body>
</html>