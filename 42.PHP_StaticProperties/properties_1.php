<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Static Properties</title>
</head>
<body>
    <?php 
        class pi{
            public static $value = 3.14159;
        }
        echo pi::$value;
    ?>
</body>
</html>