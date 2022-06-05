<?php
echo "sneha<br>";
$str = "student and bca";
$pattern = "/bc(a){1}/"; //metacharacter
echo preg_match($pattern, $str);
$str = "Sneha";
$pattern = "/sneha/i";  //modifiers
echo"<br>";
echo preg_match($pattern, $str);
$a=20;                //operators
$b=10;
$c=30;
$sum=$a+$b;
$sub=$a-$b;
$multi=$a*$b;
$divi=$a/$b;
$mod=$a%$b;
echo"<br>";
echo"sum=".$sum."<br/>";
echo"sub=".$sub."<br/>";
echo"multi=".$multi."<br/>";
echo"divi=".$divi."<br/>";
echo"mod=".$mod."<br/>";
?>