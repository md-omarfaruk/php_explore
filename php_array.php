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
        // INDEXED ARRAY-------------------------------------
        // INDEXED ARRAY-------------------------------------

        $indexed_array = array('mango', 'banana', 'apple', 'orange', 'pear', 'strawberry');
            $arrayLength = count($indexed_array);
            for($i = 0; $i < $arrayLength; $i++){
                if($i == 2){
                    break;
                }
                else{
                    echo $indexed_array[$i];
                    echo "<br>";
                }
            }
                echo "<br>";


                // ASSOCIATIVE ARRAY-------------------------------------
                // ASSOCIATIVE ARRAY-------------------------------------

            $associative_array = array('mango' => '1kg', 'banana' => '2kg', 'apple' => "3kg",);
            foreach($associative_array as $key => $value){
                    echo "$key = $value <br>";
            }
            echo "<br>";

            // MULTIDIMENSIONAL ARRAY-------------------------------------
            // MULTIDIMENSIONAL ARRAY-------------------------------------

                $multipleArray = array(array("FRUITS", "mango", "banana"), array("CARS", "bmw", "rolls royce"), array("FRIENDS", "Md. Omar", "Faruk"));
                $multipleArrayLength = count($multipleArray);
                for($i = 0; $i < $multipleArrayLength; $i++){
                    for($j = 0; $j < count($multipleArray[$i]); $j++){
                        echo $multipleArray[$i][$j];
                        echo "<br>";
                    }
                    echo "<br>";
                }

            // MULTIDIMENSIONAL ARRAY-------------------------------------
            // MULTIDIMENSIONAL ARRAY-------------------------------------

                $array_sorting= array(2, 7, 5, 1, 4);
                sort($array_sorting);
                for($i = 0; $i < count($array_sorting); $i++){
                    echo $array_sorting[$i];
                    echo "<br>";

                }
                echo "<br>";

                $array_rsorting= array(2, 7, 5, 1, 4);
                rsort($array_rsorting);
                for($i = 0; $i < count($array_rsorting); $i++){
                    echo $array_rsorting[$i];
                    echo "<br>";
                }
                echo "<br>";

        $fruits = array("mango" => "1kg", "strawberry" => "2kg", "banana" => "3kg");
                asort($fruits);
                foreach($fruits as $key => $value){
                    echo "$key = $value <br>";
                }
                echo "<br>";
        $fruits_arsorting = array("mango" => "1kg", "strawberry" => "2kg", "banana" => "3kg");

                arsort($fruits_arsorting);
                foreach($fruits_arsorting as $key => $value){
                    echo "$key = $value <br>";
                }
                echo "<br>";
                $fruits_ksorting = array("mango" => "1kg", "strawberry" => "2kg", "banana" => "3kg");

                ksort($fruits_ksorting);
                foreach($fruits_ksorting as $key => $value){
                    echo "$key = $value <br>";
                }
                echo "<br>";
                $fruits_krsorting = array("mango" => "1kg", "strawberry" => "2kg", "banana" => "3kg");

                krsort($fruits_krsorting);
                foreach($fruits_krsorting as $key => $value){
                    echo "$key = $value <br>";
                }
                echo "<br>";
    ?>
</body>
</html>