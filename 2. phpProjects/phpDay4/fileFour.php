<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 2/1/19
 * Time: 10:10 AM
 */
function motto(){
    echo "Hello, this is our school motto.";
    echo "<br>";
}
motto();
motto();
motto();
motto();

function ongeza($x,$y){
    echo $x+$y;
}
ongeza(34,33);
echo "<br>";
ongeza(33,44);
echo "<br>";
function majina($name){
    echo "My name is" . $name;
    echo "<br>";
}
majina("King");
majina("Wanyama");
function volume($r,$h){
    $jibu=3.142*$r**2*$h;
    return $jibu;
}
echo volume(14,10);
echo "<br>";
echo volume(7,24);
?>