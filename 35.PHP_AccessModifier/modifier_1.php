<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Access Modifier</title>
</head>
<body>
    <?php 
        class Fruit{
            public $name;
            protected $color;
            private $weight;
        }
        $mango = new Fruit();
        $mango->name = "Mango";
        // $mango->color = "Yellow";
        // $mango->weight = "300";
        echo  $mango->name;
        // echo $mango->color;
        // echo $mango->weight;
    ?>
</body>
</html>