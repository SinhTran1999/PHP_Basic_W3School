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
        public function __construct() {
            self::welcome();
        }
    }
    new greeting();
?>
</body>
</html>