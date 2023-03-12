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
        $car = array("bmw", "rolls royce");
        $fruits = array("mango" => "1kg", "strawberry" => "2kg", "banana" => "3kg");

            foreach($car as $brand){
                echo "$brand <br>";
            }

            echo "<br>";

            foreach($fruits as $key => $value) {
                echo  "$key = $value <br>";
            } 
            
            
    ?>
</body>
</html>