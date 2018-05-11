<?php
echo "we can check file is avilable or not on selected location","<br>";
if(file_exists("E:/file2.txt"))
{
    echo "Exists";
}
else
{
    echo "Not Exists";
}
?>