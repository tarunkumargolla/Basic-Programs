<?php
class class1
{
    function hello1()
    {
        echo "hello1","<br>";
    }
}
final class class2 extends class1
{
    function hello2()
    {
        echo "hello2","<br>";
    }
}
class class3 extends class2
{
    function hello3()
    {
        echo "hello3","<br>";
    }
}
?>