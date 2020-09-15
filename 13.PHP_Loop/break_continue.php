<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Loop</title>
</head>
<body>
    <?php  
        for ($x = 0; $x < 10; $x++) {
            if ($x == 4) {
                break;
            }
            echo "The number is: $x <br>";
            echo "<br>";
        }
    ?>
    <?php  
    for ($x = 0; $x < 10; $x++) {
        if ($x == 4) {
            continue;
        }
        echo "The number is: $x <br>";
        echo "<br>";
    }
    ?>
    <?php  
        $x = 0;
        
        while($x < 10) {
        if ($x == 4) {
            break;
        }
        echo "The number is: $x <br>";
        $x++;
        } 
        echo "<br>";
    ?> 
    <?php  
        $x = 0;
        
        while($x < 10) {
        if ($x == 4) {
            $x++;
            continue;
        }
        echo "The number is: $x <br>";
        $x++;
        } 
    ?>  
</body>
</html>