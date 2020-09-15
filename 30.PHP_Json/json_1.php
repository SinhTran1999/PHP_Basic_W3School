<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP  Json</title>
</head>
<body>
    <?php
        $age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);

        echo json_encode($age);
    ?>
</body>
</html>