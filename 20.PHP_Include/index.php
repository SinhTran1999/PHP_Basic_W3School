<html>
<body>
    <div class="menu">
         <?php include 'menu.php';?>
    </div>

    <h1>Welcome to my home page!</h1>
    <p>Some text.</p>
    <p>Some more text.</p>
    <?php include 'footer.php';?>
    <?php include 'vars.php';
        echo "I have a $color $car.";
    ?>

    <?php include 'noFileExists.php';
        echo "I have a $color $car.";
    ?>
    <?php require 'noFileExists.php';
        echo "I have a $color $car.";
    ?>
</body>
</html>