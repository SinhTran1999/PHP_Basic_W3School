<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Loop</title>
</head>
<body>
    <?php  
        $x = 1;
        
        while($x <= 5) {
            echo "The number is: $x <br>";
            $x++;
        } 
        echo "<br>";
    ?>  
    <?php  
        $x = 0;
        
        while($x <= 100) {
        echo "The number is: $x <br>";
        $x+=10;
        }
    ?>  
</body>
</html>