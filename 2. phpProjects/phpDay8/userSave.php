<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Save</title>
    <style>
        label{
            color: #0a1cfd;
            padding: 10px;
            font-size: 1em;

        }
    </style>
</head>
<body>
    <form action="userSave.php"method="GET">
        <input type="text"name="x"placeholder="name"required><label for="">*</label><br>
        <input type="email"name="y"placeholder="email"required><label for="">*</label><br>
        <input type="password"name="z"placeholder="Password"required><label for="">*</label><br>
        <input type="submit"name="btnsubmit"value="Save">
    </form>
    <?php
    /**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 2/7/19
 * Time: 11:18 AM
 */
        if (isset($_GET{'x'})){
            $name=$_GET{'x'};
            $email=$_GET{'y'};
            $password=$_GET{'z'};
            $connect=mysqli_connect("localhost","root","","morningClass");
            if (!$connect){
                echo "Failed to connect";
            }else{
                $insert=mysqli_query($connect,"INSERT INTO `studiz`(`id`, `jina`, `arafa`, `kiingilio`) VALUES (null ,'$name','$email','$password')");
                if ($insert){
                    echo "Saved Successfully";
                }else{
                    echo "Failed to Save";
                }
            }
        }
    ?>
</body>
</html>