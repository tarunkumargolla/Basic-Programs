<?php
$a=100;
function hello1()
{
    $a=200;
    echo $a,"<br>";
}
function hello2()
{
   global $a;
    echo $a,"<br>";
}
hello1();
hello2();
?>
