<?php
if(isset($_POST["s1"]))
{
    $uname=$_POST["uid"];
    $con=mysqli_connect("localhost","root","","naresh123");
    $com=mysqli_query($con,"delete from register where uname='$uname'");
    if($com)
    {
        header("location:login.php");
    }
 else
    {
    echo "UserName not delete";    
    }
    mysqli_close($con);
}
?>
<html>
    <body>
        <form method="post">
            <table border="1">
                <tr>
                    <th>UserName:<input type="text"name="uid"/></th>
                </tr>
                <tr>
                    <th><input type="submit"name="s1"value="Delete"/></th>
                </tr>
            </table>
        </form>
    </body>
</html>