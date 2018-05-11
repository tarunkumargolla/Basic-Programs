<?php
echo "---------------------------","<br>";
echo "using Array_intersect()","<br>";
echo "we are retriving Common values from both arrays","<br>";
echo "---------------------------","<br>";
$a1=array(90,60,10,40,30);
$a2=array(70,10,20,90,50,40);
$a3=array_intersect($a1,$a2);
echo count($a3),"<br>";
echo print_r($a3),"<br>";
$a3=array_intersect($a2,$a1);
echo count($a3),"<br>";
echo print_r($a3),"<br>";
echo "---------------------------","<br>";
echo "using Array_diff()","<br>";
echo "we are removing Common values from both arrays and retriving values of first array","<br>";
echo "---------------------------","<br>";
$a3=array_diff($a1,$a2);
echo count($a3),"<br>";
echo print_r($a3),"<br>";
$a3=array_diff($a2,$a1);
echo count($a3),"<br>";
echo print_r($a3),"<br>";
?>
