<?php
if(isset($_POST["s1"]))
{
$uname=$_POST["uid"];
if(empty($uname))
{
    echo "must enter username","<br>";
}
$pwd=$_POST["pwd"];
if(empty($pwd))
{
    echo "must enter password","<br>";
}
}
?>
<html>
    <body>
        <form method="POST">
            <table border="1">
                <tr>
                    <th>username:</th>
                    <th><input type="text"name="uid"/></th>
                </tr>
                <tr>
                    <th>password:</th>
                    <th><input type="password"name="pwd"/></th>
                </tr>
                <tr>
                    <th></th>
                <th><input type="submit"name="s1"value="login"></th>
                </tr>
            </table>
        </form>
    </body>
</html>
