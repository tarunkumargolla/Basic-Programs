<?php
$s="hello world";
echo "---------------------------","<br>";
echo "Using strpos()","<br>";
echo "we are retriving selected charecter first index value <br> It's a case sensitive","<br>";
echo "---------------------------","<br>";
echo strpos($s,"w"),"<br>";
echo strpos($s,"l"),"<br>";
echo strpos($s,"L"),"<br>";
echo "---------------------------","<br>";
echo "Using stripos()","<br>";
echo "we are retriving selected charecter first index value <br> It's a not case sensitive","<br>";
echo "---------------------------","<br>";
echo stripos($s,"L"),"<br>";
echo stripos($s,"H"),"<br>";

?>