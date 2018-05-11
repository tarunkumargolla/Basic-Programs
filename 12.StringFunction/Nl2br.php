<?php
echo "we can insert html line breaks before all new lines in a String","<br>";
$s="Naresh
    Technologies
    Hyderabad";
echo $s,"<br>";
echo nl2br($s),"<br>";
?>