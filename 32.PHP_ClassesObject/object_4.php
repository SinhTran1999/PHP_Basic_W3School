<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Classes/Object</title>
</head>
<body>
    <?php
        class Fruit {
            public $name;
        }
        $apple = new Fruit();
        $apple->name = "Apple";
        echo $apple->name;
    ?>
</body>
</html>