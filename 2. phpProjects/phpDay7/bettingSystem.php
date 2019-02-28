<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bet Yangu</title>
</head>
<body>
<form action="bettingSystem.php" method="POST">
    <input type="number" name="x" placeholder="Enter Number">
    <button>Bet</button>
</form>
<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 2/6/19
 * Time: 10:32 AM
 */
 if (isset($_POST{'x'})){
        $bet=$_POST{'x'};
     switch ($bet){
         case 1:
             echo "Won";
         break;
         case 1:
             echo "Won";
             break;
         case 2:
             echo "Won a car";
             break;
         case 3:
             echo "Won a laptop";
             break;
         default:
             echo "You lost the bet";
     }
 }

?>
</body>
</html>