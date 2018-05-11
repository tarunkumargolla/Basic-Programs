<?php
$a=100;
$b=100;
if($a==$b)
{
echo "equal","<br>";    
}
else
{
    echo "not equal","<br>";
}
echo"--------------","<br>";
$a=100;
$b="100";
if($a==$b)
{
echo "equal","<br>";    
}
else
{
    echo "not equal","<br>";
}
echo"--------------","<br>";

?>
<?php
$a=100;
$b=100;
echo var_dump($a===$b),"<br>";
echo "---------","<br>";
echo var_dump($a===$b),"<br>";
echo "---------","<br>";
?>
<?php
$a=100;
$b=100;
echo var_dump($a==$b),"<br>";
echo var_dump($a<$b),"<br>";
echo var_dump($a<=$b),"<br>";
echo var_dump($a>$b),"<br>";
echo var_dump($a>=$b),"<br>";
echo var_dump($a!=$b),"<br>";
echo var_dump($a<>$b),"<br>";
?>