<?php
if(isset($_POST['s1']))
{
    $empno=$_POST['t1'];
    $ename=$_POST['t2'];
    $sal=$_POST['t3'];
    $s=$_POST['s1'];
    if($s=="insert")
    {
        $con=mysqli_connect("localhost","root","","naresh123");
        $com=mysqli_query($con,"insert into emp values($empno,'$ename',$sal)");
        if($com)
        {
           echo "data inserted";
        }
 else 
     {
     echo "data not inserted";
     }
     mysqli_close($con);
    }
     if($s=="update")
    {
        $con=mysqli_connect("localhost","root","","naresh123");
        $com=mysqli_query($con,"update emp set ename='$ename',sal=$sal where empno='$empno'");
        if($com)
        {
           echo "data changed";
        }
 else 
     {
     echo "data not changed";
     }
     mysqli_close($con);
    }
     if($s=="delete")
    {
        $con=mysqli_connect("localhost","root","","naresh123");
        $com=mysqli_query($con,"delete from emp where empno=$empno");
        if($com)
        {
           echo "data deleted";
        }
 else 
     {
     echo "data not deleted";
     }
     mysqli_close($con);
    }
}    
?>
<html>
    <body>
        <h1 baground color="red">Form</h1>
        <form method="POST">
            <table border="1">
                <tr>
                    <td>empno</td>
                    <td><input type="text"name="t1"/></td>
                </tr>
                <tr>
                    <th>ename</th>
                    <th><input type="text"name="t2"/></th>
                </tr>
                <tr>
                    <th>salary</th>
                    <th><input type="text"name="t3"/></th>
                </tr>
                <tr>
                    <th><input type="submit"name="s1"value="insert"></th>
                    <th><input type="submit"name="s1"value="update">
                    <input type="submit"name="s1"value="delete"></th>
                </tr>
            </table>
        </form>
    </body>
</html>
<!DOCTYPE html>
<html>
<head>
<!--your stuff-->
</head>
<body>
<!--your stuff-->
<input type="text" id="txtAutoComplete" list="languageList"/><!--your input textbox-->
<datalist id="languageList">
<option value="HTML" />
<option value="CSS" />
<option value="JavaScript" />
<option value="SQL" />
<option value="PHP" />
<option value="jQuery" />
<option value="Bootstrap" />
<option value="Angular" />
<option value="ASP.NET" />
<option value="XML" />
</datalist>
</body>
</html>
