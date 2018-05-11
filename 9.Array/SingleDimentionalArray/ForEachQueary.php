<?php
$a=array(10,20,30,40,50);
echo count($a),"<br>";
$a[2]=60;
echo print_r($a),"<br>";
echo "Display values","<br>";
echo "---------------","<br>";
foreach($a as $v)
{
    echo $v,"<br>";
}
         echo "Display key and values","<br>";
echo "----------------------","<br>";
foreach($a as $k=>$v)
{
    echo $k ."------------------".$v,"<br>";
}      
$a[4]=100;
echo print_r($a);
?>