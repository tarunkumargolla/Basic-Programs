<?php
$fn=fopen("E:/file1.txt","r");
$data=fread($fn,filesize("E:/file1.txt"));
echo $data;
?>