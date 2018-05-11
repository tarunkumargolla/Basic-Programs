<?php
echo "Implement method over loading with the help of values","<br>";
class class1
{
    function add($i1=0,$i2=0,$i3=0)
    {
        echo $i1+$i2+$i3,"<br>";
    }
}
$c1=new class1();
$c1->add();
$c1->add(10);
$c1->add(10,20);
$c1->add(10,20,30);
$c1->add(10,20,30,40);
?>