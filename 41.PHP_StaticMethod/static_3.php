<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP static method</title>
</head>
<body>
    <?php
        class greeting {
            public static function welcome() {
                echo "Hello World!";
            }
        }

        class SomeOtherClass {
            public function message() {
                greeting::welcome();
            }
        }
    ?>
</body>
</html>