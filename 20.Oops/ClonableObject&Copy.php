<?php
echo "clonable object","<br>";
class class1
{
    var $a;
}
$c1=new class1();
$c1->a=100;
echo $c1->a,"<br>";
$c2=clone$c1;
$c2->a=200;
echo $c1->a,"<br>";
?>
<?php
echo "---------------------","<br>";
echo "COPY","<br>";
class class2
{
    var $a;
}
$c1=new class2();
$c1->a=100;
echo $c1->a,"<br>";
$c2=$c1;
$c2->a=200;
echo $c1->a,"<br>";
?>
