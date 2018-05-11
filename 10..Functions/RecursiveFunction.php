<?php
echo "It's nothing but function it self call this is called recursive function","<br>";
function fact($n)
{
    if($n<=1)
    {
        return 1;
    }
 else 
        
 {
     return $n*fact($n-1);
 }
}
echo fact(0),"<br>";
echo fact(1),"<br>";
echo fact(2),"<br>";
echo fact(3),"<br>";
?>