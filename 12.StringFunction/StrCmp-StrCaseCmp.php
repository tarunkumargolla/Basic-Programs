<?php
echo "---------------------------","<br>";
echo "Using strcmp()","<br>";
echo "we can compare two strings<br>It's a case sensitive<br>String1 is less then String2 here it will return '-1'<br>String1 is greater then String2 here it will return '1'<br>String1 and String2 is equal here it will return '0'","<br>";
echo "---------------------------","<br>";
$s1="A";
$s2="A";
echo strcmp($s1,$s2),"<br>";
$s1="A";
$s2="B";
echo strcmp($s1,$s2),"<br>";
$s1="B";
$s2="A";
echo strcmp($s1,$s2),"<br>";
$s1="A";
$s2="a";
echo strcmp($s1,$s2),"<br>";
echo "---------------------------","<br>";
echo "Using strcasecmp()","<br>";
echo "Strcmp() and Strcasecmp() both are same but Strcasecmp() is not a case sensitive","<br>";
echo "---------------------------","<br>";
$s1="A";
$s2="a";
echo strcasecmp($s1,$s2),"<br>";
?>