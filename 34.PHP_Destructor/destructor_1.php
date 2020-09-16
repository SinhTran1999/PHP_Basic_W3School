<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Destructor</title>
</head>
<body>
<?php
    class Fruit {
        public $name;
        public $color;

    function __construct($name) {
        $this->name = $name; 
    }
    function __destruct() {
        echo "The fruit is {$this->name}."; 
    }
}

$apple = new Fruit("Apple");
?>
</body>
</html>