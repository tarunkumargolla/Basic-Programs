<?php
if(isset($_POST["s1"]))
{
    $uname=$_POST["uid"];
    $pwd=sha1($_POST["pwd"]);
    $con=mysqli_connect("localhost","root","","naresh123");
    $com=mysqli_query($con,"insert into user values('$uname','$pwd')");
    if($com)
    {
        header("location:login.php");
    }
    else
    {
        echo "Not registered";
    }
    mysqli_close($con);
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
                <td></td>
                <td align="center"><input type="submit"name="s1"value="Registration"></td>
                </tr>
            </table>
        </form>
    </body>
</html>
