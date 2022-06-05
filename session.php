<?php
echo"sneha<br>";
session_start();
$_SESSION["login"]="secessful";
echo"session start";
if(isset($_SESSION['login']))
{
	echo"SUCESSFUL";
}
session_destroy();
?>