<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 2/1/19
 * Time: 10:06 AM
 */
$x=0;
while ($x<5){
    echo $x;
    echo "<br>";
    $y++;
}
echo "<br>";
// This is a Do While Group
$y=0;
do{
    echo $y;
    $y++;
    echo "<br>";
}while($y<=5);
// This is a For Loop

// This is a Foreach loop
$names=array("King","Timo","Willy","Nelly","Joy","Daisy","Twitty","Stacy");
foreach ($names as $z){
    echo $z;
    echo "<br>";
}
?>