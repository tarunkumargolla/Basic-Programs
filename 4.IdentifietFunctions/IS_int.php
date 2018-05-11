<?php
$a=100;
echo var_dump(is_int($a)),"<br>";
$a=100.45;
echo var_dump(is_int($a)),"<br>";
$a="100";
echo var_dump(is_int($a)),"<br>";
$a=true;
echo var_dump(is_int($a)),"<br>";
?>