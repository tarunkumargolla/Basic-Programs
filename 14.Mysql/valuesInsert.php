<?php
$con=mysqli_connect("localhost","root","","naresh123");
$com=mysqli_query($con,"insert  emp values(7,'scott',1000),(8,'martin',2000)");
if($com)
{
    echo "data inserted";
}
else 
{
    echo "data not inserted";
}
mysqli_close($con);
?>