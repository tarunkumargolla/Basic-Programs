<?php
echo "we can check mobile no start with +91 digit or not","<br>";
if(isset($_POST["s1"]))
{
    $mobile=$_POST["mno"];
    if(preg_match("/^(?:\+)91\d{10}$/",$mobile))
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