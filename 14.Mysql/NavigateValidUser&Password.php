<?php
if(isset($_POST["s1"]))
{
    $uname=$_POST["pid"];
    $pwd=$_POST["pwd"];
    $con=mysqli_connect("localhost","root","","naresh");
    $com=mysqli_query($con,"select * from users where uname='$uname' and pwd='$pwd'");
    if($r=mysqli_fetch_row($com))
    {
    header("location:home.php");
    }
    else
    {
        echo "invalid u/p";
    }
}
?>
<html>
    <body>
        <form method="POST">
            <table border="1">
                <tr>
                    <th>username</th>
                    <th><input type="text"name="pid"/></th>
                </tr>
                <tr>
                    <th>password</th>
                    <th><input type="password"name="pwd"/></th>
                </tr>
                <tr>
                    <th></th>
                    <th><input type="submit" name="s1"value="Login"/></th>
                </tr>
            </table>
        </form>
    </body>
</html>