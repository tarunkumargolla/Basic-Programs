<?php
interface in1
{
    function hello1();
}
interface in2
{
    function hello2();
}
class class1 implements in1,in2
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
class class2 extends class1
{
    function hello3()
    {
        echo "hello3","<br>";
    }
}
class class3 extends class2
{
    function hello4()
    {
        echo "hello4","<br>";
    }
}
$c3=new class3();
$c3->hello1();
$c3->hello2();
$c3->hello3();
$c3->hello4();
?>