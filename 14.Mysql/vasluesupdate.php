<?php
$con=mysqli_connect("localhost","root","","naresh123");
$com=mysqli_query($con,"update emp set ename='james',sal=5000 where empno=1");
if($com)
{
    echo "data changed";
}
else 
{
    echo "data not changed";
}
mysqli_close($con);
?>