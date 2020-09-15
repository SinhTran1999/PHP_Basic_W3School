<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Date and Time</title>
</head>
<body>
    <?php
        date_default_timezone_set("America/New_York");
        echo "The time is " . date("h:i:sa");
    ?>
</body>
</html>