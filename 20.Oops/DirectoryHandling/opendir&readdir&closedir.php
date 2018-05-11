<?php
$dir=opendir("D:/");
while($dirs=readdir($dir))
{
    echo print_r($dirs),"<br>";
}
closedir();
?>