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
       $number= "1";

       switch ($number){
            case "2":
                echo "No, you are not right brother";
                break;
            case "1":
                echo 'Yes, you are right brother';
                break;
            case 2:
                echo 'no, brother tumi bujho nai';
                break;
            default:
                echo "no, brother tumi ekhono bujho nai";
       }
    ?>
</body>
</html>