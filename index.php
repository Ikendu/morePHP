<!DOCTYPE html>
<html>
<body>

<?php require './commonFolder/header.html'?>

<h2>File Contents</h2>
<?php
$x ="Hellodtytyrtur world!";

$word = substr($x, -5, 3);

echo(min([0, 150, 30, 20, -8, -200]).'<br>');

$c = "25";

echo var_dump($c) . "<br>";

echo PHP_INT_MAX . "<br>";
is_int(45) . "<br>";

echo $word . 'wrjkwprkwpeer' . '<br>';

//divide by zero

function divide($dividend, $divisor){
    if($divisor == 0){
        throw new Exception("Cannot devide by zero");
    }
    return $dividend/$divisor;
}

try {   
    echo divide(50, 10);
     echo divide(30, 0);
    echo divide(20,0);
} catch (Exception $e) {
    echo "Division by zero not accepted <br>";
} finally{
    echo 'Continue other processes';
}

echo '<h2>End of Main Section</h2>';

$content = fopen("HTMLNote.txt", "r");

echo fread($content, filesize("HTMLNote.txt"));
fclose($content);

require './commonFolder/footer.html';

?> 
 
</body>
</html>