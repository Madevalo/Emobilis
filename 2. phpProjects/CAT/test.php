
<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
<h2>Names</h2>
<form method="POST" action="test.php">
    Name: <input type="text" name="x">
    <input type="submit" name="submit" value="Submit">
</form>
    <?php
    if (isset($_POST{'x'})){
        $name=$_POST{'x'};
        $connect=mysqli_connect("localhost","root","","names");
        if (!$connect){
            echo "Failed to connect";
        }else{
            $insert=mysqli_query($connect,"INSERT INTO `names`(`Name`) VALUES ('$name')");
            if ($insert){
                echo "Saved Successfully";
            }else{
                echo "Failed to Save";
            }
        }
    }
    ?>
    <?php
    echo "<h2>Your Input:</h2>";
    echo $name;
    ?>
</body>
</html>
