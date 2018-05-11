<?php
$sum=0;
for($i=1;$i<=5;$i++)
{
    for($j=1;$j<=$i;$j++)
    {
        $sum=$sum+1;
        echo "&nbsp";
        echo $sum;
    }
    echo "<br>";
}
echo "<hr>";
$sum=16;
for($i=5;$i>=1;$i--)
{
    for($j=1;$j<=$i;$j++)
    {
        $sum=$sum-1;
        echo "&nbsp";
        echo $sum;
       
        
    }
    echo "<br>";
}
?>