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
    <form action="register.php"method="POST">
        <table>
            <tr>
                <td>Username:</td>
                <td><input type="text"name="username"class="textInput"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email"name="email"class="textInput"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password"name="password"class="textInput"></td>
            </tr>
            <tr>
                <td>Password Again:</td>
                <td><input type="password"name="password2"class="textInput"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit"name="register_btn" value="Register"></td>
            </tr>
        </table>
    </form>
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
    if (isset($_POST{'register_btn'})){
        $username=$_POST{'username'};
        $email=$_POST{'email'};
        $password=$_POST{'password'};
        $password2=$_POST{'password2'};
        $conn=mysqli_connect("localhost","root","","users");
        if (!$conn){
            echo "Failed to Connect";
        }else {
            $insert = mysqli_query($conn, "INSERT INTO `users`(`id`, `username`, `email`, `password`) VALUES (null ,'$username','$email','$password')");
            if (!$insert) {
                echo "Failed";
            } else {
                echo "Success <br>";
            }
            echo "accepted <br>";
        }
        if ($password==$password2){

            $password = md5($password); //password in hash before storing for security purposes
            echo "You are now logged in";
            $_SESSION{'username'} = $username;
            header("location: home.php"); //Redirecting to home page
        }else{
            //failed
            echo "The two pasword do not match";
        }
    }
    ?>
</body>
</html>
