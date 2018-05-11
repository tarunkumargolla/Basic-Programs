<?php
echo "we can encode the data but we can't decode the data<br>sha1 stands for simple hash algorithm<br>using sha1() we can encode the data into 40-bit alpha numeric charactors","<br>";
$s="martin";
echo $s,"<br>";
echo sha1($s);
?>