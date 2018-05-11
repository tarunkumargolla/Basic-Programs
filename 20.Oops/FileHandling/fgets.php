<?php
echo "retriving at a time only one line information from selected file","<br>";
$fn=fopen("E:/file1.txt","r");
$c1=fgets($fn);
echo $c1,"<br>";
$c2=fgets($fn);
echo $c2,"<br>";
$c3=fgets($fn);
echo $c3,"<br>";
$c4=fgets($fn);
echo $c4,"<br>";
?>