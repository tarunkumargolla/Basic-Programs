 <?php
$con=mysqli_connect("localhost","root","");
$com=mysqli_query($con,"create database naresh123");
if($com)
{
    echo "database  created";
}
else 
{
    echo "database not created";
}
mysqli_close($con);
?> 
