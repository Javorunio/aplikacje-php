<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php
        $i = 1;
            do{
                echo "<li>Element $i</li>";
                $i++;
            }
            while($i < 5);
        ?>
    </ul>
</body>
</html>