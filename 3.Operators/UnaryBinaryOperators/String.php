<?php
$s1="hello";
$s2="world";
echo $s1+$s2,"<br>";
echo "WARNING=using only (.)dot operater","<br>";
echo $s1.$s2,"<br>";
$s1=$s1.$s2;
echo $s1,"<br>";
$s1.=$s2;
echo $s1;
?>