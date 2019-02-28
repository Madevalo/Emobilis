<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 2/11/19
 * Time: 10:14 AM
 */
if (isset($_GET{'x'})){
    $jina=$_GET{'x'};
    $nambari=$_GET{'y'};
    $salo=$_GET{'z'};
    $conn=mysqli_connect("localhost","root","","employees");
    if (!$conn){
        echo "Database failed to connect";
    }else{
        $insert=mysqli_query($conn,"INSERT INTO `details`(`id`, `name`, `phone`, `salary`) VALUES (null ,'$jina','$nambari','$salo')");
        if (!$insert){
            echo "Employee not Saved";
        }else{
            echo "Employee Saved Successfully";
            header("location:fileOne.php");
        }
    }
}
?>