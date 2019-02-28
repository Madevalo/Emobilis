<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
</head>
<body>
<form action="logIn.php" method="POST">
    <input type="text"name="username"placeholder="username"><br>
    <input type="password"name="password"placeholder="Password"><br>
    <input type="submit"name="btn-submit"value="Log In">
</form>
<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 2/15/19
 * Time: 8:57 AM
 */
    if (isset($_POST{'username'})){
        $username=$_POST{'username'};
        $password=$_POST{'password'};
        $password=md5($password);
        $conn=mysqli_connect("localhost","root","","users");
        $select=mysqli_query($conn, "SELECT * FROM `users` WHERE 'username'=$username AND 'password'=$password");
        echo "in";
            $_SESSION{'username'}=$username;
            header("location; home.php");
    }else{
        echo "Failed";
    }
?>
</body>
</html>