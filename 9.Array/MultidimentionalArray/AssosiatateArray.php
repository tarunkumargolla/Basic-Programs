<?php
$s=array("nums"=>array(10,20,30,40),"names"=>array("scott","james","martin"),"chess"=>array("A","B","C","D","E"),"comps"=>array("nacre","wipro"));
echo count($s),"<br>";
echo "----------------","<br>";
echo count($s["nums"]),"<br>";
echo $s["nums"][0],"<br>";
echo print_r($s["nums"]),"<br>";
echo "----------------","<br>";
echo count($s["names"]),"<br>";
echo $s["names"][0],"<br>";
echo print_r($s["names"]),"<br>";
echo "----------------","<br>";
echo count($s["chess"]),"<br>";
echo $s["chess"][0],"<br>";
echo print_r($s["chess"]),"<br>";
echo "----------------","<br>";
echo count($s["comps"]),"<br>";
echo $s["comps"][0],"<br>";
echo print_r($s["comps"]),"<br>";
echo "----------------","<br>";
foreach($s as $k=>$v)
{
    echo $k,"<br>";
foreach($v as $v1)
{
    echo $v1,"<br>";
}
echo "----------------","<br>";
}
?>
OUTPUT DIAGRAM:-
<html>
    <head>
        <title>maltidimentional array</title>
    </head>
    <body>
        <div>
            <img src="imeges/2.jpg"width="800"height="500">
        </div>
    </body>
</html>