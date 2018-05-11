<?php
echo "using base64-decode()we can decode the data","<br>";
$s="tarun kumar";
echo $s,"<br>";
$s1=base64_encode($s);
echo $s1,"<br>";
echo base64_decode($s1),"<br>";
?>