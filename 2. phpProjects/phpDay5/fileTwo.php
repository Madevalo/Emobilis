<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 2/4/19
 * Time: 10:23 AM
 */
// This is an anassociative array
$wanafunzi = array("John"=>"1","2"=>"Viv","3"=>"Seffu","4"=>"Clare","5"=>"Andy");
echo "John is number ".$wanafunzi{'John'}." in their class.";
echo "<br>";
echo "The student at position two is ".$wanafunzi{2};
echo "<br>";
foreach ($wanafunzi as $funguo=>$dhamana_yake){
    echo "Keys = ".$funguo.", Values = ".$dhamana_yake;
    echo "<br>";
}
?>