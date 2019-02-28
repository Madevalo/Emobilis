<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 1/30/19
 * Time: 10:46 AM
 */
$salamu="Hello World";
echo strlen($salamu);
echo "<br>";
echo str_word_count($salamu);
echo "<br>";
echo strrev($salamu);
echo "<br>";
echo strpos($salamu,"World"."<br>");
echo str_replace("World","Marvin",$salamu);
echo "<br>";
?>