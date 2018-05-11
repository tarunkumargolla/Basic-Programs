<?php
if(isset($_POST["s1"]))
{
    $uname=$_POST["uid"];
    $pwd=sha1($_POST["pwd"]);
    $cpwd=$_POST["cpwd"];
    if($_POST["pwd"]==$_POST["cpwd"])
    {
    $con=mysqli_connect("localhost","root","","naresh123");
    $com=mysqli_query($con,"select * from user where uname='$uname' and pwd='$pwd'");
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
    else
    {
        echo "two passwords are not match";
    }
    
}
?>
<html>
    <body>
        <form method="POST">
            <table border="1">
                <tr>
                    <td>username</td>
                    <td><input type="text"name="uid"/></td>
                </tr>
                <tr>
                    <td>password</td>
                    <td><input type="password"name="pwd"/></td>
                </tr>
                <tr>
                    <td>conform password</td>
                    <td><input type="password"name="cpwd"/></td>
                </tr>
                <tr>
                    <td><a href="Registration.php">newuser</a></td>
                <td align="center"><input type="submit"name="s1"value="login"></td>
                </tr>
            </table>
        </form>
    </body>
</html>