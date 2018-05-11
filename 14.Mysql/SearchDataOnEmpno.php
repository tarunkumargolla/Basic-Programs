<?php
if(isset($_POST["s1"]))
{
    $empno=$_POST["t1"];
    $con=mysqli_connect("localhost","root","","naresh123");
    $com=mysqli_query($con,"select * from emp where empno=$empno");
    if($r=mysqli_fetch_row($com));
    {
        //display data in textbox controls
    }
    mysqli_close($con);
}
?>
<html>
    <body>
        <form method="POST">
            <table border="1">
                <tr>
                    <th>empno</th>
                    <th><input type="text"name="t1"value="<?php global $r;echo $r[0];?>"></th>
                </tr>
                <tr>
                    <th>ename</th>
                    <th><input type="text"name="t2"value="<?php global $r;echo $r[1];?>"></th>
                </tr>
                <tr>
                    <th>salary</th>
                    <th><input type="text"name="t3"value="<?php global $r;echo $r[2];?>"></th>
                </tr>
                <tr>
                    <th></th>
                    <th><input type="submit"name="s1"value="GetData"></th>
                </tr>
            </table>
        </form>
    </body>
</html>