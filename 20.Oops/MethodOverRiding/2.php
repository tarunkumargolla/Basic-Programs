<?php
class parent1
{
    function house()
    {
        echo "one floor","<br>";
    }
}
class child1 extends parent1
{
    function house()
    {
        echo "two floors","<br>";
    }
}
$c2=new child1();
$c2->house();
?>