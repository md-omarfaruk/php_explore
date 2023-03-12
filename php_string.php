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
        $php_string = "Hello World";

        echo var_dump($php_string);
        echo "<br/>";
        

        echo strlen($php_string);
        echo "<br/>";

        echo str_word_count($php_string);
        echo "<br/>";
        
        echo strrev($php_string);
        echo "<br/>";

        echo strpos($php_string, "World");
        echo "<br/>";

        echo str_replace("World", "Md. Omar Faruk", "Hello World");
        echo "<br/>";

    ?>
</body>
</html>