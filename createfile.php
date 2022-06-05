<?php
$file="create_file.php";
mkdir("create_file");
//rmdir("create_folder");//
echo filesize("create_file.php");
echo"<br>";
echo filetype("create_file.php");
if (file_exists($file))
{
	echo"file exists";
}
else
{
	echo"file does not exists";
}
?>