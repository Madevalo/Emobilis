<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BMI</title>
</head>
<body>
<form action="BMI.php"method="POST">
    <input type="number"name="x"placeholder="Weight"><br>
    <input type="text"name="y"placeholder="Height"><br>
    <button>Calculate</button>
</form>
<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 2/6/19
 * Time: 9:42 AM
 */
    if (isset($_POST{'x'})) {
        $pweight = $_POST{'x'};
        $pheight = $_POST{'y'};
        $calBMI = $pweight / $pheight ** 2;
        echo "Your Body Mass Index is " . $calBMI;
        echo "<br>";
        if ($calBMI < 18) {
            echo "Underweight";
        } elseif ($calBMI < 30) {
            echo "Healthy Weight";
        } elseif ($calBMI < 35) {
            echo "Obese Class 1";
        } elseif ($calBMI < 40) {
            echo "Severely Obese (Class 2)";
        } elseif ($calBMI < 50) {
            echo "Morbidly Obese (Class 3)";
        } else {
            echo "Super Obese (Class 4)";
        }
    }
?>
</body>
</html>