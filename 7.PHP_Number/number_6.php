<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Number</title>
</head>
<body>
<?php
    // Cast float to int 
    $x = 23465.768;
    $int_cast = (int)$x;
    echo $int_cast;
    echo "<br>";

    // Cast string to int
    $x = "23465.768";
    $int_cast = (int)$x;
    echo $int_cast;
?>  
</body>
</html>