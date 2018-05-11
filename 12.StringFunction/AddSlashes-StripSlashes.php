<?php
$s="hello'world";
echo $s,"<br>";
echo "---------------------------","<br>";
echo "Using addslashes()","<br>";
echo "using add slashes into before single quatation and double quatation only<br>We can't add '/' before @,$,*,&'","<br>";
echo "---------------------------","<br>";
echo addslashes($s),"<br>";
$s='hello"world';
echo addslashes($s),"<br>";
$s='hello&world';
echo addslashes($s),"<br>";
echo "---------------------------","<br>";
echo "Using stripslashes()","<br>";
echo "using this method we can remove slashes from string","<br>";
echo "---------------------------","<br>";
$s='hello"world';
$s1=addslashes($s);
echo $s1,"<br>";
echo stripslashes($s1),"<br>";
?>