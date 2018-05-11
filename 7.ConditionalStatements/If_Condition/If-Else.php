<?php
if(isset($_POST["s1"]))
{
    $uname=$_POST["uid"];
    $pwd=$_POST["pwd"];
    if($uname=="admin"&&$pwd=="admin123")    
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
                    <th>UserName</th>
                    <th><input type="text"name="uid"/></th>
                </tr>
                <tr>
                    <th>PassWord</th>
                    <th><input type="password"name="pwd"/></th>
                </tr>
                <tr>
                    <th></th>
                    <th><input type="submit"name="s1"value="login"/></th>
                </tr>
            </table>
        </form>
    </body>
</html>
