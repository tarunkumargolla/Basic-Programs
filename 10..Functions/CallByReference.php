<?php
function incr(&$i)
{
    $i=$i+5;
    echo $i,"<br>";
}
$j=100;
incr($j);
echo $j,"<br>";
?>