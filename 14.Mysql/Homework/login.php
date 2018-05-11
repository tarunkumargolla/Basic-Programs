<?php
if(isset($_POST["s1"]))
{
    $uname=$_POST["uid"];
    $pwd=$_POST["pwd"];
    $epwd=sha1($pwd);
    $con=mysqli_connect("localhost","root","","naresh123");
    $com=mysqli_query($con,"select * from register where uname='$uname' and epwd='$epwd'");
     if($r=mysqli_fetch_row($com))
    {
        header("location:home.php");
    }
    else
    {
        echo "Invalid U/P";
    }
    mysqli_close($con);
}
?>
<html>
    <body>
        <form method="POST">
            <table border="1">
                <tr>
                    <th>UserName:<input type="text"name="uid"/></th>
                </tr>
                <tr>
                    <th>PassWord:<input type="password"name="pwd"/></th>
                </tr>
                <tr>
                    <th><a href="registration1.php">NewUser</a>
                    <input type="submit"name="s1"value="login"/></th>
                </tr>
                <tr>
                    <th><a href="forgetpwd.php">ForgetPwd</a></th>
                </tr>
            </table>
        </form>
    </body>
</html>