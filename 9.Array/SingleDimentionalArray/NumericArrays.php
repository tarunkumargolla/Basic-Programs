//syntax-1<br>
<?php
$a=array();
$a[0]=500;
$a[1]=300;
$a[2]=100;
$a[3]=400;
$a[4]=200;
echo count($a),"<br>";
echo $a[2],"<br>";
echo "----------------"."<br>";
for($i=0;$i<count($a);$i++)
{
    echo $a[$i],"<br>";
}
echo print_r($a),"<br>";
$a[0]=800;
echo print_r($a),"<br>";
$a[5]=100.45;
$a[6]="james";
$a[7]='A';
$a[8]=true;
echo count($a),"<br>";
$a[12]=700;
echo count($a),"<br>";
echo $a[10],"<br>";
echo print_r($a),"<br>";
echo "<hr>";
?>
//syntax-2
<?php
echo "<hr>";
$a=array(10,20,30,40,50);
echo count($a),"<br>";
echo $a[0],"<br>";
echo print_r($a),"<br>";
$a[0]=90;
echo print_r($a),"<br>";
$a[5]="naresh";
echo count($a),"<br>";
echo print_r($a),"<br>";
echo "<hr>";
?>
//syntax-3
<?php
echo "<hr>";
$a=array(10,1=>20,2=>40,3=>60,90,0=>70,30);
echo count($a),"<br>";
echo $a[5],"<br>";
echo $a[2],"<br>";
echo $a[1],"<br>";
echo $a[3],"<br>";
echo $a[4],"<br>";
echo $a[0],"<br>";
echo print_r($a),"<br>";
?>