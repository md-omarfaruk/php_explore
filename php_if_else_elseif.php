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

        $string = 'Hello World';
        $name = "Md. Omar Faruk";

        if(strlen($string) > 10){
            echo $name;
        }
        else{
            "Write down you father name here";
        }
        echo "<br>";

        if(strlen($string) < 10) {
            echo $name;
        }
        elseif(str_word_count($string) >= 2){
                echo $name;
        }
        else{
            echo "Father name";
        }
    ?>
</body>
</html>