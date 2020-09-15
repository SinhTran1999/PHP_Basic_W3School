<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Filter</title>
</head>
<body>
    <?php
        $int = 100;

        if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
            echo("Integer is valid");
        } else {
            echo("Integer is not valid");
        }
    ?>
</body>
</html>