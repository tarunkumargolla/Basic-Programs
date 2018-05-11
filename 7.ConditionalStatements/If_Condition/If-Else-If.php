<?php
if(isset($_POST["rt"]))
{
    $fn=$_POST["fn"];
    $sn=$_POST["sn"];
    $s=$_POST["arth"];
     //echo $s;
    if($s=="add")
    {
        $rt=$fn+$sn;
        //echo $rt;
    }
    else if($s=="mul")
    {
        $rt=$fn*$sn;
        //echo $rt;
    }
    else if($s=="subt")
    {
        $rt=$fn-$sn;
        //echo $rt;
    }
    else if($s=="div")
    {
        $rt=$fn/$sn;
        //echo $rt;
    }
}
?>
<html>
    <body>
        <div>
        <form method="POST">
            <table border="1">
                <tr size="100">
                    <th>First Number</th>
                    <th><input type="text"name="fn"value='<?php global $fn;echo $fn;?>'/></th>
                </tr>
                <tr>
                    <th>Second Number</th>
                    <th><input type="text"name="sn"value='<?php global $sn;echo $sn;?>'/></th>
                </tr>
                <tr>
                    <th>Result</th>
                    <th><input type="text"name="rt"value='<?php global $rt;echo $rt;?>'/></th>
                </tr>
                <tr>
                <th><input type="submit"name="arth"value="add"/>
                    <input type="submit"name="arth"value="subt"/>
                    <input type="submit"name="arth"value="mul"/>
                   <input type="submit"name="arth"value="div"/></th>
                </tr>
            </table>
        </form>
            </div>
    </body>
</html>