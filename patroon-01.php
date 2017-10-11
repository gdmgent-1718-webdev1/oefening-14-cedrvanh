<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>PHP - Patroon 1</title>
</head>
<body>
    <?php 
        const AMOUNT = 9;
        for($i = 0; $i < AMOUNT; $i++){
            echo ("<div class='circle red'></div>");
        }
    ?>
</body>
</html>