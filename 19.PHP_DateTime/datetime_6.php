<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Date and Time</title>
</head>
<body>
    <?php
        $d=strtotime("10:30pm April 15 2014");
        echo "Created date is " . date("Y-m-d h:i:sa", $d);
        echo "<br>";
    ?>  
    <?php
        $d=strtotime("tomorrow");
        echo date("Y-m-d h:i:sa", $d) . "<br>";

        $d=strtotime("next Saturday");
        echo date("Y-m-d h:i:sa", $d) . "<br>";

        $d=strtotime("+3 Months");
        echo date("Y-m-d h:i:sa", $d) . "<br>";
        echo "<br>";
    ?>
    <?php
        $startdate=strtotime("Saturday");
        $enddate=strtotime("+6 weeks", $startdate);

        while ($startdate < $enddate) {
        echo date("M d", $startdate) . "<br>";
        $startdate = strtotime("+1 week", $startdate);
        }
        echo "<br>";
    ?>
    <?php
        $d1=strtotime("July 04");
        $d2=ceil(($d1-time())/60/60/24);
        echo "There are " . $d2 ." days until 4th of July.";
    ?>

</body>
</html>