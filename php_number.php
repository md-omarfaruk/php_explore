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
        $number = 125;
        $number_int = 1125;
        $number_float = 12.125;
        $number_infinite = 1.2e511;
        $numerical = "Hello";
    

        echo var_dump($number);
        echo "<br/>";

        echo is_int($number_int);
        echo "<br/>";

        echo is_float($number_float);
        echo "<br/>";

        echo is_finite($number);
        echo "<br/>";

        echo is_infinite($number_infinite);
        echo "<br/>";

        echo var_dump(is_numeric($numerical));
        echo "<br/>";

        echo (int)$number_float;





    ?>
</body>
</html>