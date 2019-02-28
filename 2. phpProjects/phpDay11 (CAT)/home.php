<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 2/14/19
 * Time: 9:38 AM
 */
// 1.using a tutorial provided as a guide, create a user verification system.
// 2.on the home page, allow CRUD operation for data required to maintain a store i.e Item name,
// Quantity and selling price.
// 3.Using a tutorial provided, create an interactive gallery.
// N/B Style up your system using bootstrap.
// CRUD - Create, Read, Update, Delete
    session_start();
$conn=mysqli_connect("localhost","root","","registration");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register, login and logout user php mysql</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
    <h1>Register, login and logout user php mysql</h1>
</div>
<h1>Home</h1>
<div><h4>Welcome</h4></div>
<div><a href="logout.php">Log Out</a></div>
</body>
</html>
