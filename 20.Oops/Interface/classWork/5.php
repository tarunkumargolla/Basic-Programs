<?php
interface in1
{
    function hello1();
}
interface in2
{
    function hello2();
}
interface in3 extends in1,in2
{
    function hello3();
}
class class1 implements in3
{
    function hello1()
    {
        echo "hello1","<br>";
    }
    function hello2()
    {
        echo "hello2","<br>";
    }
    function hello3()
    {
        echo "hello3","<br>";
    }
}
$c1=new class1();
$c1->hello1();
$c1->hello2();
$c1->hello3();
?>