<?php
echo"sneha<br>";
$arr=array("sneha"=>10,"hii"=>20,"hlw"=>30);
asort($arr);
foreach($arr as $x=>$x_value)
{
	echo"key=".$x.",value=".$x_value;
	echo"<br>";
}
?>