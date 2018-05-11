<?php
$s=array("scott"=>100,"james"=>900,"martin"=>400,200,10=>700,"james");
echo print_r($s),"<br>";
echo "--------------------","<br>";
echo  "Using Asort()","<br>";
echo "we are arrenging associate array values in assending order","<br>";
echo "--------------------","<br>";
asort($s);
echo print_r($s),"<br>";
echo "--------------------","<br>";
echo  "Using Arsort()","<br>";
echo "we are arrenging associate array values in desending order","<br>";
echo "--------------------","<br>";
arsort($s);
echo print_r($s),"<br>;"
?>