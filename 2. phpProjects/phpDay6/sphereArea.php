<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Area of a sphere</title>
</head>
<body>
<form action="sphereArea.php"method="GET">
    <input type="number"name="x"placeholder="radius">
    <button>Calculate</button>
</form>
<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 2/5/19
 * Time: 10:31 AM
 */
    if (isset($_GET{'x'})){
        $r=$_GET{'x'};
        $volume=4/3*3.142*$r**3;
        echo "Volume = ".$volume;
    }
?>
</body>
</html>