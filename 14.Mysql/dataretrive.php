<?php
$con=mysqli_connect("localhost","root","","naresh");
$com=mysqli_query($con,"select * from emp");
while($r=mysqli_fetch_row($com))
{
    echo $r[0],"<br>";
    echo $r[1],"<br>";
    echo $r[2],"<br>";
    echo $r[3],"<br>";
    //echo $r["empno"],"<br>";
}
mysqli_close($con);
?>