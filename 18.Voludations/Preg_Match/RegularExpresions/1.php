<?php
echo "we can check string will containing 'selected' charecter or not","<br>";
$s="this is php class";
if(preg_match("/w/",$s))
{
   echo strstr($s,"w"),"<br>";
}
else
{
    echo "Invalid";
}
?>
