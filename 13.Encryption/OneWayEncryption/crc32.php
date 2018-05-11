<?php
echo "we can encode the data but we can't decode the data<br>Crc32 stands for Cyclic Redundency Check<br>using crc32() we can encode the data into numeric format","<br>";
$s="GOLLA";
echo $s,"<br>";
echo crc32($s);
?>