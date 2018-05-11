 <?php
 echo "->this function will containing parameters <br> ->In the PHP function parameter will acts as local variable","<br>";
function add($a,$b)
{
    echo $a+$b,"<br>";
}
//add();
//add(10);
add(10,20);
add(20,40);
add(10.4,20.56);
?>
<?php
echo "<hr>";
echo "Assuming default values into parameter","<br>";
function add1($a=0,$b=0,$c=0)
{
    echo $a+$b+$c,"<br>";
}
add1();
add1(10);
add1(10,20);
add1(20,20);
add1(30,50,60);
add1(30,50,60,80);
?>