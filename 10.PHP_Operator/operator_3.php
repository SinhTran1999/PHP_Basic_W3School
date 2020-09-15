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
        $y = "100";

        var_dump($x == $y); // returns true because values are equal
        echo "<br>";
    ?> 
    <?php
        $x = 100;  
        $y = "100";

        var_dump($x === $y); // returns false because types are not equal
        echo "<br>";
    ?>
    <?php
        $x = 100;  
        $y = "100";

        var_dump($x != $y); // returns false because values are equal
        echo "<br>";
    ?> 
    <?php
        $x = 100;  
        $y = "100";

        var_dump($x <> $y); // returns false because values are equal
        echo "<br>";
    ?>  
    <?php
        $x = 100;  
        $y = "100";

        var_dump($x !== $y); // returns true because types are not equal
        echo "<br>";
    ?>  
    <?php
        $x = 100;
        $y = 50;

        var_dump($x > $y); // returns true because $x is greater than $y
        echo "<br>";
    ?> 
    <?php
        $x = 10;
        $y = 50;

        var_dump($x < $y); // returns true because $x is less than $y
        echo "<br>";
    ?>  
    <?php
        $x = 50;
        $y = 50;

        var_dump($x >= $y); // returns true because $x is greater than or equal to $y
        echo "<br>";
    ?>  
    <?php
        $x = 50;
        $y = 50;

        var_dump($x <= $y); // returns true because $x is less than or equal to $y
        echo "<br>";
    ?>  
    <?php
        $x = 5;  
        $y = 10;

        echo ($x <=> $y); // returns -1 because $x is less than $y
        echo "<br>";

        $x = 10;  
        $y = 10;

        echo ($x <=> $y); // returns 0 because values are equal
        echo "<br>";

        $x = 15;  
        $y = 10;

        echo ($x <=> $y); // returns +1 because $x is greater than $y
    ?>  
</body>
</html>