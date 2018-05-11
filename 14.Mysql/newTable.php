<?php
$con=mysqli_connect("localhost","root","","naresh123");
$com=mysqli_query($con,"create table emp(empno int,ename varchar(20),sal int)");
if($com)
{
    echo "table created";
}
else 
{
    echo "table not created";
}
mysqli_close($con);
?>
