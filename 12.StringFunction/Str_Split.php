<?php
echo "we can Split string into array<br>This function will containg two parameters here 1)String 2)Length","<br>";
$s="hello world";
echo $s,"<br>";
$s1=str_split($s);
echo print_r($s1),"<br>";
$s1=str_split($s,2);
echo print_r($s1),"<br>";
?>