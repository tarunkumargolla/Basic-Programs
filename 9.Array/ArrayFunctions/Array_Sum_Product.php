<?php
$a=array(10,20,30,40,50,60);
$sum=0;
for($i=0;$i<count($a);$i++)
{
    $sum=$sum+$a[$i];
}
echo $sum,"<br>";
echo "---------------","<br>";
echo "using Array_sum()","<br>";
echo "---------------","<br>";
echo array_sum($a),"<br>";
echo "---------------","<br>";
$pro=1;
for($i=0;$i<count($a);$i++)
{
    $pro=$pro*$a[$i];
}
echo $pro,"<br>";
echo "---------------","<br>";
echo "using Array_product()","<br>";
echo "---------------","<br>";
echo array_product($a),"<br>";
?>