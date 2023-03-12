<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style=" text-align: center;">
    <?php 
        function sumStringsLength($one, $two){
            $sum = strlen($one) + strlen($two);
            echo $sum;
        }

        sumStringsLength("md. Omar ", "Faruk");
        echo "<br>";
        sumStringsLength("What's", "up");

    ?>
</body>
</html>