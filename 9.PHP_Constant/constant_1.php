<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Constant</title>
</head>
<body>
    <?php
        // case-sensitive constant name
        define("GREETING", "Welcome to W3Schools.com!");
        echo GREETING;
        echo "<br><br>";
    ?> 
    <?php
        // case-insensitive constant name
        define("GREETING", "Welcome to W3Schools.com!", true);
        echo greeting;
    ?> 
</body>
</html>