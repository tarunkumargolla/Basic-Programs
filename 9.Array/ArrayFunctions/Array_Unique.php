<?php
echo "we can remove duplicate values from array","<br>";
$a=array(30,10,80,10,40,50,20,30);
echo count($a),"<br>";
echo count(array_unique($a)),"<br>";
echo print_r(array_unique($a)),"<br>";
?>
