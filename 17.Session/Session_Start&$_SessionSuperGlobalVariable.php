<?php
echo "in the php using carry data from login page to home page","<br>";
session_start();
if(isset($_POST["s1"]))
{
    $uname=$_POST["uid"];
    $pwd=$_POST["pwd"];
    $epwd=sha1($pwd);
    $con=mysqli_connect("localhost","root","","naresh123");
    $com=mysqli_query($con,"select * from users where uname='$uname' and epwd='$epwd'");
    if($r=mysqli_fetch_assoc($com))
    {   
        if($r["uname"]==$uname&&$r["epwd"]==$epwd)
        {
            $_SESSION["un"]=$uname;
            header("location:home.php");
        }
    }
    else
    {
    echo "invalid u/p";    
    }
    mysqli_close($con);
}
?>
<html>
    <body>
        <form method="POST">
            <table border="1">
                <tr>
                    <th>Username</th>
                    <th><input type="text"name="uid"></th>
                </tr>
                <tr>
                    <th>Password</th>
                    <th><input type="password"name="pwd"></th>
                </tr>
                <tr>
                    <th></th>
                    <th><input type="submit"name="s1"value="login"></th>
                </tr>
            </table>   
        </form>
    </body>
</html>