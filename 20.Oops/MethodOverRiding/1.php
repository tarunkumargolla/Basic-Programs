<?php
class class1
{
    function hello()
    {
        echo "abc","<br>";
    }
}
class class2 extends class1
{
    function hello()
    {
        echo "xyz","<br>";
    }
}
$c2=new class2();
$c2->hello();
?>