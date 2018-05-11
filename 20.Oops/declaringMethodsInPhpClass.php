 <?php
class class1
{
    function hello1()
    {
        echo "hello from naresh","<br>";
    }
    function add($i,$j)
    {
        echo $i+$j;
    }
}
//echo hello1();
//echo add(10,20);
$c1=new class1();
$c1->hello1();
$c1->add(10,20);
?>