<?php
$a=100;
echo var_dump(is_float($a)),"<br>";
$a=100.45;
echo var_dump(is_float($a)),"<br>";
$a="100";
echo var_dump(is_float($a)),"<br>";
$a=true;
echo var_dump(is_float($a)),"<br>";

?>
