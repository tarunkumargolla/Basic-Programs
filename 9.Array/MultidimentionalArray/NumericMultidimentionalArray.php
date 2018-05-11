<?php
$a=array(100,array(20,30,40),200,array(90,80,70,60,array(10,20,30,40,array(50,60,70))),400,10=>700,500);
echo count($a),"<br>";
echo $a[0],"<br>";
echo "--------------","<br>";
echo count($a[1]),"<br>";
echo $a[1][0],"<br>";
echo $a[1][1],"<br>";
echo $a[1][2],"<br>";
echo print_r($a[1]),"<br>";
echo "--------------","<br>";
echo count($a[2]),"<br>";
echo $a[2],"<br>";
echo "--------------","<br>";
echo count($a[3]),"<br>";
echo $a[3][0],"<br>";
echo $a[3][1],"<br>";
echo $a[3][2],"<br>";
echo $a[3][3],"<br>";
echo print_r($a[3]),"<br>";
echo "--------------","<br>";
echo count($a[3][4]),"<br>";
echo $a[3][4][0],"<br>";
echo $a[3][4][1],"<br>";
echo $a[3][4][2],"<br>";
echo $a[3][4][3],"<br>";
echo print_r($a[3][4]),"<br>";
echo "--------------","<br>";
echo count($a[3][4][4]),"<br>";
echo $a[3][4][4][0],"<br>";
echo $a[3][4][4][1],"<br>";
echo $a[3][4][4][2],"<br>";
echo print_r($a[3][4][4]),"<br>";
echo "--------------","<br>";
echo $a[4],"<br>";
echo print_r($a[4]),"<br>";
echo "--------------","<br>";
echo $a[10],"<br>";
echo print_r($a[10]),"<br>";
echo "--------------","<br>";
echo $a[11],"<br>";
echo print_r($a[11]),"<br>";
echo "--------------","<br>";
foreach($a[3][4][4] as $v)
{
    echo $v,"<br>";
}
echo "--------------","<br>";
echo print_r($a),"<br>";
?>
OUTPUT DIAGRAM:
<html>
    <head>
        <title>maltidimentional array</title>
    </head>
    <body>
        <div>
            <img src="imeges/1.jpg"width="500"height="400">
        </div>
    </body>
</html>
