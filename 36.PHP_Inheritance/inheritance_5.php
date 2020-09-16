<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP inheritance</title>
</head>
<body>
    <?php
        class Fruit {
            final public function intro() {
            }
        }

        class Strawberry extends Fruit {
            // will result in error
            public function intro() {
            }
        }
    ?>
</body>
</html>