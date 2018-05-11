<?php
class class1
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
class class3 extends class2
{
    function hello3()
    {
        echo "hello3","<br>";
    }
}
class class4 extends class3
{
    function hello4()
    {
        echo "hello4","<br>";
    }
}
class class5 extends class4
{
    function hello5()
    {
        echo "hello5","<br>";
    }
}
$c2=new class2();
$c2->hello1();
$c2->hello2();
//$c2->hello3();
echo "<hr>";
$c3=new class3();
$c3->hello1();
$c3->hello2();
$c3->hello3();
echo "<hr>";
$c4=new class4();
$c4->hello1();
$c4->hello2();
$c4->hello4();
$c4->hello3();
echo "<hr>";
$c5=new class5();
$c5->hello1();
$c5->hello2();
$c5->hello4();
$c5->hello3();
$c5->hello5();
echo "<hr>";
?>