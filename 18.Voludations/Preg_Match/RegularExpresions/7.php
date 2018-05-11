<?php
echo "we can check date validation and date info or not","<br>";
if(isset($_POST["s1"]))
{
    $date=$_POST["dt"];
    if(preg_match("/\d{2}\/\\d{2}\/\\d{4}/",$date)||preg_match("/\d{2}-\d{2}-\d{4}/",$date))
    {
        echo "Valid";
    }
    else
    {
        echo "Invalid";
    }
}
?>
<html>
    <body>
        <form method="POST">
            Enter Date:<input type="text"name="dt"/>
            <input type="submit"name="s1"value="submit"/>
        </form>
    </body>
</html>