<?php
echo "-------------------","<br>";
echo "Using In_array()","<br>";
echo "we can check value is avilable in array or not if value is avil display '1' if value is Not avil display nothing","<br>";
echo "-------------------","<br>";
$a=array(10,20,50,30,40);
echo in_array(10,$a),"<br>";
echo var_dump(in_array(70,$a)),"<br>";
echo in_array(50,$a),"<br>";
echo "-------------------","<br>";
echo "Using Array_search()","<br>";
echo "we can check value is avilable in array or not if value is avil display key if value is Not avil display nothing","<br>";
echo "-------------------","<br>";
echo array_search(30,$a),"<br>";
echo var_dump(array_search(70,$a)),"<br>";
echo array_search(50,$a),"<br>";
?>
