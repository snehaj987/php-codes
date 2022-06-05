<?php
$file="txt.txt";
mkdir ("snezhz");
if (file_exists($file))
{
    echo readfile("txt.txt");
    rename ("txt.txt","newfile.txt");
}
else
{
    echo"file doesn't exists";
}
?>