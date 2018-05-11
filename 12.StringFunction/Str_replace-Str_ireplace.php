<?php
$s="hello world";
echo $s,"<br>";
echo "---------------------------","<br>";
echo "Using str_replace()","<br>";
echo "we can replace new strings in place of old strings <br>It's a case sensitive","<br>";
echo "---------------------------","<br>";
echo str_replace("hello","Hello",$s),"<br>";
echo str_replace("WORLD","tarun",$s),"<br>";
echo "---------------------------","<br>";
echo "Using str_ireplace()","<br>";
echo "we can replace new strings in place of old strings <br>It's a not case sensitive","<br>";
echo "---------------------------","<br>";
 echo str_ireplace("WORLD","tarun",$s),"<br>";
?>