<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Grading System</title>
</head>
<body>
<h1>Welcome to our Grading System</h1>
<form action="gradingSystem.php" method="GET">
    <input type="number"name="x"placeholder="Marks">
    <button>Grade</button>
</form>
<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 2/5/19
 * Time: 11:13 AM
 */
    if (isset($_GET{'x'})){
        $marks=$_GET{'x'};
        if ($marks<20){
            echo "<h1>E</h1>";
        }elseif ($marks<34){
            echo "<h1>D-</h1>";
        }elseif ($marks<39){
            echo "<h1>D</h1>";
        }elseif ($marks<44){
            echo "<h1>D+</h1>";
        }elseif ($marks<49){
            echo "<h1>C-</h1>";
        }elseif ($marks<54){
            echo "<h1>C</h1>";
        }elseif ($marks<59){
            echo "<h1>C+</h1>";
        }elseif ($marks<64){
            echo "<h1>B-</h1>";
        }elseif ($marks<69){
            echo "<h1>B</h1>";
        }elseif ($marks<74){
            echo "<h1>B+</h1>";
        }elseif ($marks<79){
            echo "<h1>A-</h1>";
        }else{
            echo "<h1>A</h1>";
        }
    }
?>
</body>
</html>