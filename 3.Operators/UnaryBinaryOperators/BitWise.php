<?php
$a=10;
$b=20;
echo $a&$b,"<br>";
echo $a|$b,"<br>";
echo $a^$b,"<br>";
echo "---------","<br>";
$a=10;
$b=15;
echo $a&$b,"<br>";
echo $a|$b,"<br>";
echo $a^$b,"<br>";
?>
Explanation:<br>

$a&$b <br>1010<br>1111<br>-----<br>1010<br>-----<br>
$a|$b <br>1010<br>1111<br>-----<br>1111<br> -----<br> 
 $a^$b<br> 0101<br>0000<br>-----<br> 0101<br>-----<br>
