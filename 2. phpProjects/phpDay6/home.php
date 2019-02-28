<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="home.php" method="GET">
    <input type="number"placeholder="First Number" name="x" required><br>
    <input type="number"placeholder="Second Number" name="y" required><br>
    <button name="z">Calculate</button>
</form>
<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 2/5/19
 * Time: 9:45 AM
 */
    if (isset($_GET{'x'})){
        $num1=$_GET{'x'};
        $num2=$_GET{'y'};
        $jibu=$num1+$num2;
        echo "Your total is ".$jibu;
    }
?>
</body>
</html>