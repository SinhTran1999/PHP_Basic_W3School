<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Abstract Classes</title>
</head>
<body>
    <?php
    abstract class ParentClass {
        abstract protected function prefixName($name);
    }

    class ChildClass extends ParentClass {
        public function prefixName($name, $separator = ".", $greet = "Dear") {
            if ($name == "John Doe") {
                $prefix = "Mr";
            } elseif ($name == "Jane Doe") {
                $prefix = "Mrs";
            } else {
                $prefix = "";
            }
            return "{$greet} {$prefix}{$separator} {$name}";
        }
    }

    $class = new ChildClass;
    echo $class->prefixName("John Doe");
    echo "<br>";  
    echo $class->prefixName("Jane Doe");
    ?>
</body>
</html>