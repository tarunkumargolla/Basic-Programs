<?php
$a=100;
echo var_dump(is_null($a)),"<br>";
$a=null;
echo var_dump(is_null($a)),"<br>";
$a="100";
echo var_dump(is_null($a)),"<br>";
$a=null;
echo var_dump(is_null($a)),"<br>";
$a=true;
echo var_dump(is_null($a)),"<br>";
echo "--------------------","<br>";
$a=100;
echo var_dump(empty($a)),"<br>";
$a="";
echo var_dump(empty($a)),"<br>";
$a="100";
echo var_dump(empty($a)),"<br>";
$a="";
echo var_dump(empty($a)),"<br>";
$a=true;
echo var_dump(empty($a)),"<br>";

?>
