<?php
echo "we can slipt String into array and remove all spaces,\,.,","<br>";
$s="Hello World";
echo $s,"<br>";
$s1=explode(" ",$s);
echo print_r($s1),"<br>";
echo $s1[1],"<br>";
echo "<hr>","<br>";
?>
<?php
$s="C:/abc/xyz/123/abc/xyz/demo.php";
$s1=explode("/",$s);
echo print_r($s1),"<br>";
echo $s1[5];
?>