<?php
echo "retriving file creation time information","<br>";
$t=filectime("E:/file.txt");
echo date('d/m/y h:m:s',$t);
echo "<hr>";
?>
<?php
echo "retriving file last access  time information","<br>";
$t=fileatime("E:/file.txt");
echo date('d/m/y h:m:s',$t);
echo "<hr>";
?>

<?php
echo "retriving file last modification  time information","<br>";
$t=filemtime("E:/file.txt");
echo date('d/m/y h:m:s',$t);
echo "<hr>";
?>
