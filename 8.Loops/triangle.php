<?php
$j=1;
for($i=5;$i>=1;$i--)
{
echo  str_repeat("&nbsp;",$i-1);
echo  str_repeat('*',$j++);
echo "<br />";
}
echo "<hr>";
$j=5;
for($i=1;$i<=5;$i++)
{
echo  str_repeat("&nbsp",$i+1);
echo  str_repeat('*',$j--);
echo "<br />";
} 
?>