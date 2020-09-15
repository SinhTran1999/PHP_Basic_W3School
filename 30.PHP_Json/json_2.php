<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Json</title>
</head>
<body>
    <?php
        $cars = array("Volvo", "BMW", "Toyota");

        echo json_encode($cars);
    ?>
</body>
</html>