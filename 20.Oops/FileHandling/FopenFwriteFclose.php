<?php
$fn=fopen("E:/file.txt","w");
fwrite($fn,"Naresh Technologies");
fclose($fn);
echo "Data Added";
echo "<hr>";
?>
<?php
$fn=fopen("E:/file.txt","a");
fwrite($fn," hydrabad");
fclose($fn);
echo "Data Appended";
echo "<hr>";
?>