<?php
$prop = "user";
$name = "Alex Porters";
setcookie($prop, $name, time() + (86400 * 30), "/");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php
  echo "Value is: " . $_COOKIE[$prop];
?>

    
</body>
</html>