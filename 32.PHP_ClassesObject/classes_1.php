<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Classes/Objects</title>
</head>
<body>
    <?php
        class Fruit {
            // Properties
            public $name;
            public $color;

            // Methods
            function set_name($name) {
                $this->name = $name;
            }
            function get_name() {
                return $this->name;
            }
        }
    ?>
</body>
</html>