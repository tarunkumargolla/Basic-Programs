<?php
echo "1)Days Format","<br>"
. "=>using small 'd' format we retriving day of the month with reading 0","<br>"
        . "eg.01,02,03,04..........31","<br>"
        . "=>using small 'j' format we retriving day of the month without reading 0","<br>"
        . "eg.1,2,3,......31","<br>"
        . "=>using capital 'D' format text representation of date with containing three letters","<br>"
        . "eg.","<br>"
        . "=>using small 'l' format a full text representation day of the week","<br>"
        . "eg.sunday to saturday","<br>"
        . "=>using capital 'L' format we rettriving numeric representation of day of the week(1to7)","<br>"
        . "eg.1.monday 2.tuesday........7.sunday","<br>"
        . "=>using small 'w' numeric representation of day of the week (0-6)","<br>"
        . "eg.0.sunday........6.saturday","<br>"
        . "=>using small 'z' format we are retriving day of the year","<br>"
        . "eg.0-365","<br>";
echo date('d'),"<br>";
echo date('j'),"<br>";
echo date('D'),"<br>";
echo date('l'),"<br>";
echo date('L'),"<br>";
echo date('w'),"<br>";
echo date('z'),"<br>";
echo date('S'),"<br>";
?>