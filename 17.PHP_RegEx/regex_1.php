<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Regular Expression</title>
</head>
<body>
    <?php
        $str = "Visit W3Schools";
        $pattern = "/w3schools/i";
        echo preg_match($pattern, $str); 
    ?>
</body>
</html>