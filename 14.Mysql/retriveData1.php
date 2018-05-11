<?php
$con=mysqli_connect("localhost","root","","naresh");
$com=mysqli_query($con,"select * from emp");
while($r=mysqli_fetch_assoc($com))
{
    echo $r["empno"],"<br>";
    echo $r["empname"],"<br>";
    echo $r["sal"],"<br>";
    echo $r["deptno"],"<br>";
    //echo $r["1"],"<br>";
}
mysqli_close($con);
?>