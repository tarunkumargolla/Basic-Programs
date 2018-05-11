<?php
if(isset($_POST["s1"]))
{
    $uname=$_POST["uid"];
    $dob=$_POST["dob"];
    $con=mysqli_connect("localhost","root","","naresh123");
    $com=mysqli_query($con,"select * from register where uname='$uname' and dob='$dob'");
    if($r=mysqli_fetch_row($com))
    {
        header("location:changepwd.php");
    }
    else
    {
        echo "Invalid data";
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
                    <th>DOB:<input type="text"name="dob"/></th>
                </tr>
                <tr>
                    <th>
                        <input type="submit"name="s1"value="Read"/>
                        <a href="login.php">Navigate</a>
                    </th>
                </tr>
            </table>
        </form>
    </body>
</html>