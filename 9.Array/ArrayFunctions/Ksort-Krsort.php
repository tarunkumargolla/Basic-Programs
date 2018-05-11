<?php
$s=array("scott"=>100,"james"=>900,"martin"=>400,200,10=>700,"james");
echo print_r($s),"<br>";
echo "--------------------","<br>";
echo  "Using Ksort()","<br>";
echo "we are arrenging array keys in assending order","<br>";
echo "--------------------","<br>";
ksort($s);
echo print_r($s),"<br>";
echo "--------------------","<br>";
echo  "Using Krsort()","<br>";
echo "we are arrenging array keys in desending order","<br>";
echo "--------------------","<br>";
krsort($s);
echo print_r($s),"<br>";
?>