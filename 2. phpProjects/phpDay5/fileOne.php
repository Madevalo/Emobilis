<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 2/4/19
 * Time: 9:48 AM
 */
//This is an indexed array
$magari=array("Daisy","Twitty","Joy","Stacy","Alison","Mwas");
echo $magari{1}.",".$magari{4}.",".$magari{2};
echo "<br>";
echo "My name is ".$magari{0}."."." My twin sister is called ".$magari{3};
echo "<br>";
echo count($magari);
$arrlength = count($magari);
echo "<br>";
for ($x=0;$x < $arrlength; $x++){
    echo $magari{$x}."<br>";
}
?>