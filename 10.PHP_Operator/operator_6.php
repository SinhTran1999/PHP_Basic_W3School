<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Operator</title>
</head>
<body>
    <?php
        $txt1 = "Hello";
        $txt2 = " world!";
        echo $txt1 . $txt2;
        echo "<br>";
    ?>  
    <?php
        $txt1 = "Hello";
        $txt2 = " world!";
        $txt1 .= $txt2;
        echo $txt1;
    ?> 
</body>
</html>