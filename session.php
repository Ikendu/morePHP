<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session</title>
</head>
<body>

<?php
$_SESSION["username"] = "Chika";
$_SESSION["password"] = '12345678';
$_SESSION["email"] = 'chika@gmail.com';
?>

<h2>User Information</h2>

<?php
echo $_SESSION["username"] . '<br>';
echo $_SESSION["password"] . '<br>';
echo $_SESSION["email"] . '<br>';
?>

    
</body>
</html>