<?php
class class1
{
    function hello()
    {
        echo "hello1","<br>";
    }
}
class class2 extends class1
{
final function hello()
{
    echo"hello2","<br>";
}
}
class class3 extends class2
{
    function hello()
    {
        echo "hello3","<br>";
    }
}
$c1=new class1();
$c1->hello();
?>