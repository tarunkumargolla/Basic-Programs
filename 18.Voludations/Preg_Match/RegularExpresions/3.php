<?php
echo "we can check mobile no containing 10 digit no or not","<br>";
if(isset($_POST["s1"]))
{
    $mobile=$_POST["mno"];
    if(preg_match("/^[0-9]{10}$/",$mobile))
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
            Enter MobileNo:<input type="text"name="mno"/>
            <input type="submit"name="s1"value="submit"/>
        </form>
    </body>
</html>