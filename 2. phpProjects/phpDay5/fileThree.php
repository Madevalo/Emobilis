<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 2/4/19
 * Time: 10:51 AM
 */
//sorting arrays

//array sort functions include:
    //sort: sorting arrays in ascending order
    //rsort: sorting arrays in descending order
    //arsort: sorting associative arrays in ascending order according to the VALUE
    //ksort: sorting associative arrays in ascending order according to the KEY
    //asort: sorting associative arrays in descending order according to the KEY
$nambari=array(12,13,34,57,64,45,35,67,87,78,56,80,56);
sort($nambari);
$arrlength=count($nambari);
for ($x=0; $x<$arrlength;$x++){
    echo $nambari{$x}."<br>";
}
?>