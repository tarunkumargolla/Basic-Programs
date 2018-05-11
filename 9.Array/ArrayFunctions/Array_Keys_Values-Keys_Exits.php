<?php
$a=array("sachin"=>50,"naresh"=>14,"dhoni"=>40,100,10=>300);
echo "-------------------------","<br>";
echo "using Array_keys()","<br>";
echo "we are retriving only keys information from array","<br>";
echo "-------------------------","<br>";
echo print_r(array_keys($a)),"<br>";
echo "-------------------------","<br>";
echo "using Array_keys_exists()","<br>"; 
echo "we can check given keys available or not","<br>";
echo "-------------------------","<br>";
echo var_dump(array_key_exists("sachin",$a)),"<br>";
echo var_dump(array_key_exists("3",$a)),"<br>";
echo "-------------------------","<br>";
echo "using Array_values()","<br>";
echo "we are retriving only values information from array","<br>";
echo "-------------------------","<br>";
echo print_r(array_values($a)),"<br>";
?>