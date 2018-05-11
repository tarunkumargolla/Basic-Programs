<?php
echo "retriving at a time only one character from selected file","<br>";
$fn=fopen("E:/file1.txt","r");
$c1=fgetc($fn);
echo $c1,"<br>";
$c2=fgetc($fn);
echo $c2,"<br>";
$c3=fgetc($fn);
echo $c3,"<br>";
$c4=fgetc($fn);
echo $c4,"<br>";
$c5=fgetc($fn);
echo $c5,"<br>";
$c6=fgetc($fn);
echo $c6,"<br>";
?>