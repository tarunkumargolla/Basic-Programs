<?php
$con=mysqli_connect("localhost","root","","naresh");
$com=mysqli_query($con,"select * from emp");
while($r=mysqli_fetch_array($com))
{
    echo $r[0],"<br>";
    echo $r["empname"],"<br>";
    echo $r[2],"<br>";
    echo $r["deptno"],"<br>";
    }
mysqli_close($con);
?>