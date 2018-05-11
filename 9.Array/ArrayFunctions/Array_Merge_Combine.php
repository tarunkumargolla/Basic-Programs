<?php
echo "-----------------------","<br>";
echo "Using Merge Function","<br>";
echo "we can combining one or more array values","<br>";
echo "-----------------------","<br>";
$a1=array(10,20,50,80,60,90);
$a2=array(60,50,40,70,80);
$a3=array_merge($a1,$a2);
echo count($a3),"<br>";
echo print_r($a3),"<br>";
$a3=array_merge($a2,$a1);
echo count($a3),"<br>";
echo print_r($a3),"<br>";
echo "-----------------------","<br>";
echo "Using Combine Function","<br>";
echo "Create an new array first array is keys and second array is values","<br>";
echo "-----------------------","<br>";
$a1=array(10,20,50,80,60,90);
$a2=array(60,50,40,70,80,25);
$a3=array_combine($a1,$a2);
echo count($a3),"<br>";
echo print_r($a3),"<br>";
$a3=array_combine($a2,$a1);
echo count($a3),"<br>";
echo print_r($a3),"<br>";
?>
