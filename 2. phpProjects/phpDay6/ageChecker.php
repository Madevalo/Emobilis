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
<form action="ageChecker.php" method="GET">
    <input type="number" name="x" placeholder="Age">
</form>
<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 2/5/19
 * Time: 10:43 AM
 */
    if (isset($_GET{'x'})){
        $miaka = $_GET{'x'};
        if ($miaka<18){
            echo "Under age";
        }else{
            echo "Qualified";
        }
    }
?>
</body>
</html>