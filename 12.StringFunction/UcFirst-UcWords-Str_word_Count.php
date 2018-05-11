<?php
$s="hello world";
echo $s,"<br>";
echo "---------------------------","<br>";
echo "Using ucfirst()","<br>";
echo "we are converting string first character into upper case","<br>";
echo "---------------------------","<br>";
echo ucfirst($s),"<br>";
$s="naresh technologies";
echo ucfirst($s),"<br>";
echo "---------------------------","<br>";
echo "Using ucwords()","<br>";
echo "we are converting words first letter into upper case","<br>";
echo "---------------------------","<br>";
echo ucwords($s),"<br>";
echo "---------------------------","<br>";
echo "Using str_word_count()","<br>";
echo "we are retriving words count from string","<br>";
echo "---------------------------","<br>";
echo str_word_count($s),"<br>";
?>