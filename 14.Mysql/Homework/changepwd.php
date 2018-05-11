<?php
if(isset($_POST["s1"]))
{
    $uname=$_POST["uid"];
    $pwd=$_POST["pwd"];
    $epwd=sha1($pwd);
    $con=mysqli_connect("localhost","root","","naresh123");
    $com=mysqli_query($con,"update register set epwd='$epwd' where uname='$uname'");
    if($com)
    {
        header("location:login.php");
    }
    else
    {
        echo "pwd not changed";
    }
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
                    <th><input type="submit"name="s1"value="Change"/></th>
                </tr>
            </table>
        </form>
    </body>
</html>