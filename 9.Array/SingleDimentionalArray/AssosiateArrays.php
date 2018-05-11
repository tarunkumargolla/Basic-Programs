//syntax-1<br>
<?php
$s=array();
$s["sachin"]=50;
$s["dravid"]=45;
$s["dhoni"]=40;
$s[35]="naresh";
$s[0]=100;
echo count($s),"<br>";
echo  $s["dhoni"],"<br>";
echo "display values","<br>";
echo "-----------------","<br>";
foreach($s as $v)
{
    echo $v,"<br>";
}
echo "Display key and values","<br>";
echo "----------------------","<br>";
foreach($s as $k=>$v)
{
    echo $k ."=>".$v,"<br>";
}    
echo "-------------------","<br>";
echo print_r($s),"<br>";
echo "-------------------","<br>";
?>
syntax-2<br>
<?php
echo "-------------------","<br>";
$a=array("sachin"=>50,"dravid"=>45,100,"dhoni"=>40,200,35=>"naresh",300,0=>900,700,"abc"=>"xyz");
echo count($a),"<br>";
echo $a[0],"<br>";
echo $a[35],"<br>";
echo $a[1],"<br>";
echo $a[36],"<br>";
echo $a[37],"<br>";
echo $a["sachin"],"<br>";
echo $a["dravid"],"<br>";
echo $a["dhoni"],"<br>";
echo print_r($a),"<br>";