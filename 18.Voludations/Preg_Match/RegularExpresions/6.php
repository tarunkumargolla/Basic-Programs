<?php
echo "we can check write std code with phone no or not","<br>";
if(isset($_POST["s1"]))
{
    $stdno=$_POST["sno"];
    if(preg_match("/\d{3}-\d{6}$/",$stdno))
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
            Enter STD PhoneNo:<input type="text"name="sno"/>
            <input type="submit"name="s1"value="submit"/>
        </form>
    </body>
</html>