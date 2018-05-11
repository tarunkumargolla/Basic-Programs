 <?php
$c=$_COOKIE["abc"];
echo $c;
if(isset($_POST["cookie"]))
{
    $s=$_POST["cookie"];
    if($s=="s1")
    {
        header("location:index.php");
    }
}
?>
<html>
    <body>
        <form method="POST">
            <input type="submit"name="cookie"value="s1"/>
        </form>
    </body>
</html>