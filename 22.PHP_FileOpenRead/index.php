<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP File Open/Read</title>
</head>
<body>
    <?php
        $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
        echo fread($myfile,filesize("webdictionary.txt"));
        fclose($myfile);
        echo "<br>";
    ?>
     
     <?php
        $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
        echo fgets($myfile);
        fclose($myfile);
        echo "<br>";
    ?>
    <?php
        $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
        // Output one line until end-of-file
        while(!feof($myfile)) {
           echo fgets($myfile) . "<br>";
        }
        fclose($myfile);
        echo "<br>";
    ?>
    <?php
        $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
        // Output one character until end-of-file
        while(!feof($myfile)) {
        echo fgetc($myfile);
        }
        fclose($myfile);
        echo "<br>";
    ?>

</body>
</html>