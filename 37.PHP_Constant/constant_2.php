<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Constants</title>
</head>
<body>
    <?php
        class Goodbye {
            const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
            public function byebye() {
                echo self::LEAVING_MESSAGE;
            }
        }

        $goodbye = new Goodbye();
        $goodbye->byebye();
    ?>
</body>
</html>