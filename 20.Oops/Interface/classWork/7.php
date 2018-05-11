<?php
interface in1
{
    function hello1();
}
abstract class class1 implements in1
{
    function hello1()
    {
        echo "hello1","<br>";
    }
}
class class2 extends class1
{
    function hello2()
    {
        echo "hello2","<br>";
    }
}
$c2=new class2();
$c2->hello1();
$c2->hello2();
?>