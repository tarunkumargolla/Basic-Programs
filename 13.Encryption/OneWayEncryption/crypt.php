<?php
echo "we can encode the data but we can't decode the data<br>using crypt() we can encode the data into alpha numeric format<br>You must use a randomly generated salt and a strong hash function to produce a secure hash.","<br>";
$s="tarun";
echo $s,"<br>";
echo crypt($s,"md5"),"<br>";
echo crypt($s,"crc32"),"<br>";
echo crypt($s,"tarun"),"<br>";
?>