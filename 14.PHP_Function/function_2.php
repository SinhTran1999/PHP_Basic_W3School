<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Function</title>
</head>
<body>
    <?php
        function familyName($fname) {
            echo "$fname Refsnes.<br>";
        }

        familyName("Jani");
        familyName("Hege");
        familyName("Stale");
        familyName("Kai Jim");
        familyName("Borge");
        echo "<br>";
    ?>
    <?php
        function family_Name($fname, $year) {
        echo "$fname Refsnes. Born in $year <br>";
        }
        family_Name("Hege","1975");
        family_Name("Stale","1978");
        family_Name("Kai Jim","1983");
    ?>
</body>
</html>