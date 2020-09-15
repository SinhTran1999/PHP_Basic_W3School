<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Operator</title>
</head>
<body>
    <?php
        $x = 100;  
        $y = 50;

        if ($x == 100 and $y == 50) {
            echo "Hello world!";
        }
        echo "<br>";
    ?>  
    <?php
        $x = 100;  
        $y = 50;

        if ($x == 100 or $y == 80) {
            echo "Hello world!";
        }
        echo "<br>";
    ?> 
    <?php
        $x = 100;  
        $y = 50;

        if ($x == 100 xor $y == 80) {
            echo "Hello world!";
        }
        echo "<br>";
    ?> 
    <?php
        $x = 100;  
        $y = 50;

        if ($x == 100 && $y == 50) {
            echo "Hello world!";
        }
        echo "<br>";
    ?> 
    <?php
        $x = 100;  
        $y = 50;

        if ($x == 100 || $y == 80) {
            echo "Hello world!";
        }
        echo "<br>";
    ?>  
    <?php
        $x = 100;  

        if ($x !== 90) {
            echo "Hello world!";
        }
    ?>  
</body>
</html>