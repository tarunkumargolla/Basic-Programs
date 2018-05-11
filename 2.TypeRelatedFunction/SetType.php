<?php
$i=100;
echo var_dump($i),"<br>";
settype($i,"float");
echo var_dump($i),"<br>";
settype($i,"string");
echo var_dump($i),"<br>";
settype($i,"boolean");
echo var_dump($i),"<br>";
$s="naresh";
echo var_dump($s),"<br>";
settype($s,"int");
echo var_dump($s);
?>
