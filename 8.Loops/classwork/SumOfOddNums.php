 <?php
$i=0;
$sum=0;
while($i<=5)
{
  if($i%2!==0)
  {
      $sum=$sum+$i;
  }
    $i++;  
}
echo $sum;
?>