<?php
$con=mysqli_connect("localhost","root","","naresh123");
$com=mysqli_query($con,"select * from emp");
echo "mysqli_num_fields() function returns the number of fields (columns) in a result set.","<br>";
echo mysqli_num_fields($com),"<br>";
echo "mysqli_field_count()function returns the number of columns for the most recent query.","<br>";
echo mysqli_field_count($con),"<br>";
$com=mysqli_query($con,"select * from users");
echo mysqli_num_fields($com),"<br>";
echo mysqli_field_count($con),"<br>";
?>