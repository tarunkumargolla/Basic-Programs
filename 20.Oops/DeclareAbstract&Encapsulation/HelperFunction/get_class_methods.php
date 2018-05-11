<?php
class class1
{
    function hello1()
    {
        echo "martin","<br>";
    }
    function hello2()
    {
        echo "james","<br>";
    }
}
$c1=new class1();
echo print_r(get_class_methods($c1));
?>