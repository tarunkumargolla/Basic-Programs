<?php
for($i=1;$i<=5;$i++)
{
for($j=1;$j<=$i;$j++)
{
echo "*";
}
echo "<br>";
} 
echo "<hr>";
$j=1;
for($i=5;$i>=1;$i--)
{
    echo str_repeat("&nbsp", $i-1);
echo  str_repeat('*',$j++);
echo "<br />";
}
echo "<hr>";
$i=5;
while($i>=1)
{
    
    echo str_repeat('*',$i);
    echo "<br>";
    $i--;
}    
?>
 