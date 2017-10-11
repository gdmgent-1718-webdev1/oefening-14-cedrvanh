<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>PHP - Patroon 10</title>
</head>
<body>
    <?php 
        const AMOUNT = 9;
        for($i = 0; $i < AMOUNT; $i++){
            for($j = 0; $j < AMOUNT; $j++) {
                if($i == $j || $i == 8 - $j) {
                    echo ("<div class='circle red'></div>");
                } else if ($j > $i && $i > 8 - $j || $j < $i && $i < 8 - $j) {
                    echo ("<div class='circle blue'></div>");
                } else {
                    echo ("<div class='circle green'></div>");
                } 
            }
            echo ("<br>");
        }
    ?>
</body>
</html>