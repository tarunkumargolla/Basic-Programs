<?php
echo "-------------------------","<br>";
echo "using Shuffle()","<br>";
echo "we can shuffle an array values","<br>";
echo "-------------------------","<br>";
$a=array(10,20,30,40,50);
echo print_r($a),"<br>";
shuffle($a);
echo print_r($a),"<br>";
echo "-------------------------","<br>";
echo "using Array_rand()","<br>";
echo "Randomly we can change array keys","<br>";
echo "-------------------------","<br>";
$a=array(10,20,30,40,50);
echo print_r($a),"<br>";
echo print_r(array_rand($a,4)),"<br>";
echo print_r(array_rand($a,2)),"<br>";
?>