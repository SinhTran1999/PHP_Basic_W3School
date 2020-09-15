<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Array</title>
</head>
<body>
    <?php
        $cars = array("Volvo", "BMW", "Toyota"); 
        echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
        echo "<br>";
    ?>
    <?php
        $cars = array("Volvo", "BMW", "Toyota");
        echo count($cars);
    ?>
</body>
</html>