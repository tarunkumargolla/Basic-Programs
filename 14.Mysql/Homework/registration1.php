<?php
if(isset($_POST['s1']))
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
     //echo "female";   
    }
    $pnum=$_POST["pnum"];
    $email=$_POST["mail"];
    $address=$_POST["add"];
    $uname=$_POST["uid"];
    $pwd=$_POST["pwd"];
    $epwd=sha1($pwd);
    $dob=$_POST['dob'];
    $s=$_POST['s1'];
    if($s=="register")
    {
       $con=mysqli_connect("localhost","root","","naresh123");
    $com=mysqli_query($con,"insert into register(sno,fn,ln,fatn,gender,pnum,email,address,uname,epwd,dob)values($sno,'$fn','$ln','$fatn','$gender',$pnum,'$email','$address','$uname','$epwd','$dob')");
    if($com)
    {
        header("location:login.php");
    }
 else
     {
     echo "not registered";   
    }
     mysqli_close($con);
    }
     if($s=="update")
    {
        $con=mysqli_connect("localhost","root","","naresh123");
        $com=mysqli_query($con,"update register set fn='$fn',ln='$ln',fatn='$fatn',gender='$gender',pnum=$pnum,email='$email',address='$address',uname='$uname',epwd='$epwd',dob='$dob' where sno=$sno");
        if($com)
        {
           echo "data changed";
        }
 else 
     {
     echo "data not changed";
     }
     mysqli_close($con);
    }
     if($s=="delete")
    {
        $con=mysqli_connect("localhost","root","","naresh123");
        $com=mysqli_query($con,"delete from register where sno=$sno");
        if($com)
        {
           echo "data deleted";
        }
 else 
     {
     echo "data not deleted";
     }
     mysqli_close($con);
    }
}    
?>
<html>
    <body>
        <form method="POST">
            <table border="1">
                <tr><th>sno:<input type="number"name="sno"/></th></tr>
                   <tr> <th>First Name:<input type="text"name="fn"/></th></tr>
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
                    <th><input type="submit"name="s1"value="register">
                    <input type="submit"name="s1"value="update">
                    <input type="submit"name="s1"value="delete"></th>
                </tr>
            </table>
        </form>
    </body>
</html>