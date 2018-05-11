<?php
$a=array(50,10,80,40);
echo print_r($a),"<br>";
echo "--------------------","<br>";
echo  "Using Array_reverse()","<br>";
echo "we are arrenging array values in reverse order","<br>";
echo "--------------------","<br>";
echo print_r(array_reverse($a)),"<br>";
echo "--------------------","<br>";
echo  "Using Sort()","<br>";
echo "we are arrenging array values in assending order","<br>";
echo "--------------------","<br>";
sort($a);
echo print_r($a),"<br>";
echo "--------------------","<br>";
echo  "Using Rsort()","<br>";
echo "we are arrenging array values in desending order","<br>";
echo "--------------------","<br>";
rsort($a);
echo print_r($a),"<br>";
?>