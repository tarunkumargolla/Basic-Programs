<?php
$con=mysqli_connect("localhost","root","","naresh123");
$com=mysqli_query($con,"delete from emp where empno=6");
if($com)
{
    echo "data deleted";
}
else 
{
    echo "data not deleted";
}
mysqli_close($con);
?>