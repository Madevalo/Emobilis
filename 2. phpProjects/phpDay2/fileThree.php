<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 1/30/19
 * Time: 10:14 AM
 */
//Write a Php logic to
//calculate the area of any circle
//calculate the volume of a cylinder
//calculate the BMI of a person
$pi=22/7;
$radius=7;
$height=50;
$area=$pi*$radius**2;
$volume=$area*$height;
$weight=100;
$mheight=176;
$BMI=$weight/$mheight**2;
//Area of circle
echo "The area of a circle is ".$area;
echo "<br>";
//Volume of cylinder
echo "The volume of cylinder is ".$volume;
echo "<br>";
//BMI of a person
echo "Your BMI is ".$BMI
?>