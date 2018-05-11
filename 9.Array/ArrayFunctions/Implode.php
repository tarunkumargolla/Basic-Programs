<?php
echo "we can joined array values with the help of String","<br>";
$a=array("scott","james","martin");
echo implode($a,"+"),"<br>";
echo implode($a,"-"),"<br>";
echo implode($a,"OR"),"<br>";
$a=array(10,20,30,40,50);
echo implode($a,"+"),"<br>";
echo implode($a,"-"),"<br>";
echo implode($a,"*"),"<br>";
?>