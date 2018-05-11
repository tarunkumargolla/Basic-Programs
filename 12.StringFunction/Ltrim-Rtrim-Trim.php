<?php
$s="                 hello";
echo $s,"<br>";
echo "---------------------------","<br>";
echo "Using ltrim()","<br>";
echo "we can remove white spaces begining of a String","<br>";
echo "---------------------------","<br>";
echo strlen(ltrim($s)),"<br>";
echo "---------------------------","<br>";
echo "Using Rtrim()","<br>";
echo "we can remove white spaces ending of a String","<br>";
echo "---------------------------","<br>";
$s="hello               ";
echo strlen(rtrim($s)),"<br>";
echo "---------------------------","<br>";
echo "Using trim()","<br>";
echo "we can remove white spaces from begining to ending of a String","<br>";
echo "---------------------------","<br>";
$s="          hello          ";
echo strlen(trim($s)),"<br>";
?>