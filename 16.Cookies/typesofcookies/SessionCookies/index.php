<?php
if(isset($_POST["cookie"]))
{
    $s=$_POST["cookie"];
    if($s=="s1")
    {
        setcookie("abc","Naresh Technologies",time()+60);
        echo "cookie is created";
    }
    if($s=="s2")
    {
        $c=$_COOKIE["abc"];
        echo $c;
    }
    if($s=="s3")
    {
        header("location:index2.php");
    }
}
?>
<html>
    <body>
        <form method="POST">
            <input type="submit"name="cookie"value="s1"/><br>
            <input type="submit"name="cookie"value="s2"/><br>
            <input type="submit"name="cookie"value="s3"/><br>
        </form>
    </body>
</html>