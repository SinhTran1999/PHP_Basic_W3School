<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP data types</title>
</head>
<body>
<?php
class Car {
  function Car() {
    $this->model = "VW";
  }
}
    // create an object
    $herbie = new Car();

    // show object properties
    echo $herbie->model;
?>
</body>
</html>