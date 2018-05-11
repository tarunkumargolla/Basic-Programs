<?php
class class1
{
    function hello1()
    {
        echo  "hello1","<br>";
    }
}
class class2 extends class1
{
    function hello2()
    {
        echo "hello2","<br>";
    }
}
$c1=new class1();
$c1->hello1();
//$c1->hello2();
$c2=new class2();
$c2->hello2();
$c2->hello1();
?>