<?php
if(isset($_POST["Cookie"]))
{
    $s=$_POST["Cookie"];
    if($s=="s1")
    {
        setCookie("xyz","naresh technologies",time()+60);
        echo "Cookies is created";
    }
    if($s=="s2")
    {
        $s=$_COOKIE["xyz"];
        echo $s;
    }
}
?>
<html>
    <body>
        <form method="POST">
            <input type="submit"name="Cookie"value="s1"/><br>
            <input type="submit"name="Cookie"value="s2"/>
        </form>
    </body>
</html>