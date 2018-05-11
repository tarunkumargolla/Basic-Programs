<?php
interface in1
{
    function hello1();
}
interface in2 extends in1
{
    function hello2();
}
class class1 implements in2
{
    function hello1()
    {
        echo "hello1","<br>";
    }
    function hello2()
    {
        echo "hello2","<br>";
    }
}
$c1=new class1();
$c1->hello1();
$c1->hello2();
?>