<?php
echo "retriving at a time only one line information and strip html tags from selected file","<br>";
$fn=fopen("E:/file1.txt","r");
$c1=fgetss($fn);
echo $c1,"<br>";
$c2=fgetss($fn);
echo $c2,"<br>";
$c3=fgetss($fn);
echo $c3,"<br>";
$c4=fgetss($fn);
echo $c4,"<br>";
$c5=fgetss($fn);
echo $c5,"<br>";
?>