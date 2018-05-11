<?php
echo "we can check string start with 'selected' charecter or not","<br>";
$s="php class";
if(preg_match("/^p/",$s))
{
   echo strstr($s,"p"),"<br>";
}
else
{
    echo "Invalid";
}
?>
