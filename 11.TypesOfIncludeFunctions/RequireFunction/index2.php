<?php
require "index.php";
echo $a,"<br>";
hello1();
require "index.php";//factal error
hello1();
require "index3.php";//warning
$b=200;
echo $b,"<br>";
?>