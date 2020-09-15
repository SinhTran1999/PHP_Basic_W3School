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
    <?php
        $str = "The rain in SPAIN falls mainly on the plains.";
        $pattern = "/ain/i";
        echo preg_match_all($pattern, $str);
    ?>
    <?php
        $str = "Visit Microsoft!";
        $pattern = "/microsoft/i";
        echo preg_replace($pattern, "W3Schools", $str);
    ?>
    <?php
        $str = "Apples and bananas.";
        $pattern = "/ba(na){2}/i";
        echo preg_match($pattern, $str);
    ?>
    

</body>
</html>