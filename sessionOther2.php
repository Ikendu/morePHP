<?php session_start();  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2><?php echo $_SESSION["username"]; ?></h2>
    <h3><?php echo $_SESSION["email"]; ?></h3>
    <h4><?php echo $_SESSION["password"]; ?></h4>

    <?php
    function firstFunction($arg){
        echo "first function start<br>";
        return $arg . "! " .  $arg . "!! " . $arg . "!!!";
        echo "first function end<br>";
    };

    function secondFunction($arg){
        echo "second function start<br>";
        echo $arg . "! " .  $arg . "!! " . $arg . "!!! <br>";
        echo "second function end<br>";
    }

    $myValue = firstFunction("Younglife");
    echo $myValue . " from first function <br>";

    '<br>';

    $myValue2 = secondFunction("Younglife");
    echo $myValue2 . "from second funtion <br>";


    $assArray = ["name"=>"David", "address"=>"Aku road", "age"=>34];

    $encodeValue = json_encode($assArray);

    $decodedValue = json_decode($encodeValue);
    $decodedValue2 = json_decode($encodeValue, true);
    print_r($assArray);
    print_r($encodeValue);
    print_r($decodedValue);
    print_r($decodedValue2);

    echo $decodedValue->name . "<br>";
    echo $decodedValue2['name'] . "<br>";


    ?>


    
</body>
</html>