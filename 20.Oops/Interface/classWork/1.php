<?php
interface in1
{
    function hello1();
    function hello2();
}
class class1 implements in1
{
    function hello1()
    {
        echo "h1","<br>";
    }
}
class class2 implements in1
{
    function hello2()
    {
        echo "h2","<br>";
    }
}
$c2=new class2();
$c2->hello2();
?>