<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Traits</title>
</head>
<body>
  <?php 
    trait message1{
        public function msg1(){
            echo "OPP is fun!";
        }
    }
    class Welcome{
        use message1;
    }
    $obj = new Welcome();
    $obj->msg1();
  ?>  
</body>
</html>