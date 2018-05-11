<?php
function incr()
{
    $i=100;
    $i++;
    echo $i,"<br>";
}
incr();
incr();
incr();
?>
<?php
function inc()
{
   static $i=100;
    $i++;
    echo $i,"<br>";
}
inc();
inc();
inc();
?>