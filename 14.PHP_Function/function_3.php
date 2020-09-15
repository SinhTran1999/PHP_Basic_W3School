<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Function</title>
</head>
<body>
<?php
    function addNumbers(int $a, int $b) {
        return $a + $b;
    }
    echo addNumbers(5, "5 days"); 
    // since strict is NOT enabled "5 days" is changed to int(5), and it will return 10
    echo "<br>";
    ?>
    <?php declare(strict_types=1); // strict requirement

        function addNumber(int $a, int $b) {
        return $a + $b;
        }
        echo addNumber(5, "5 days"); 
        // since strict is enabled and "5 days" is not an integer, an error will be thrown
    ?>
</body>
</html>