<?php
if(isset($_POST["s1"]))
{
   $sno=$_POST["sno"];
    $fn=$_POST["fn"];
    $ln=$_POST["ln"];
    $fatn=$_POST["fatn"];
    $gender=$_POST["gender"];
    if($gender=="male")
    {
        echo "male";
    }
 else
     {
     echo "female";   
    }
    $pnum=$_POST["pnum"];
    $email=$_POST["mail"];
    $address=$_POST["add"];
    $uname=$_POST["uid"];
    $pwd=$_POST["pwd"];
    $epwd=sha1($pwd);
    $dob=$_POST["dob"];
    $con=mysqli_connect("localhost","root","","naresh123");
    $com=mysqli_query($con,"insert into register values($sno,'$fn','$ln','$fatn','$gender',$pnum,'$email','$address','$uname','$epwd','$dob')");
    if($com)
    {
        header("location:login.php");
    }
 else
     {
     echo "not registered";   
    }
}
?>
<html>
    <body>
        <form method="POST">
            <table border="1">
                <tr><th>sno:<input type="number"name="sno"/></th></tr>
                <tr>
                    <th>First Name:<input type="text"name="fn"/></th></tr>
                    <tr><th>Last Name:<input type="text"name="ln"/></th></tr>
                      <tr><th>Father Name:<input type="text"name="fatn"/></th></tr>
                      <tr>   
                    <th>Gender:
                    <input type="radio"name="gender"value="Male"/>Male
                    <input type="radio"name="gender"value="FeMale"/>FeMale</th>
                </tr>
                <tr>
                    <th>PhoneNo:<input type="number"name="pnum"/></th>
                </tr>
                <tr><th>EmailId:<input type="email"name="mail"/></th></tr>
                <tr><th>Address:<input type="text"name="add"/></th></tr>
                <tr><th>UserName:<input type="text"name="uid"/></th></tr>
                <tr><th>PassWord:<input type="password"name="pwd"/></th></tr>
                <tr><th>DOB:<input type="date"name="dob"/></th></tr>
            <tr>
                <th><input type="submit"name="s1"value="Register"/></th>
            </tr>
            </table>
        </form>
    </body>
</html>