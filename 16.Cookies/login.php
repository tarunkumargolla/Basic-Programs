<?php
if(isset($_POST["s1"]))
{                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             
    $uname=$_POST["uid"];
    $pwd=$_POST["pwd"];
    $cpwd=$_POST["cpwd"];
    if($pwd!==$cpwd)
    {
        echo "two passwords are not match";
    }
   else if($uname=="admin"&&$pwd=="admin123")
    {
         setcookie("un","$uname");
        header("location:home.php");
     } 
    else if($uname=="scott"&&$pwd=="scott123")
    {
        setcookie("un","$uname");
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
                    <th>Username</th>
                    <th><input type="text"name="uid"></th>
                </tr>
                <tr>
                    <th>Password</th>
                    <th><input type="password"name="pwd"></th>
                </tr>
                <tr>
                    <th>Conform Password</th>
                    <th><input type="password"name="cpwd"></th>
                </tr>
                <tr>
                    <th></th>
                    <th><input type="submit"name="s1"value="login"></th>
                </tr>
            </table>   
        </form>
    </body>
</html>