<?php
session_start();
if($_SESSION["un"]!=="")
{
    echo "welcome to:".$_SESSION["un"];
}
 else
{
header("location:Session_Start&$_SessionSuperGlobalVariable.php");    
}
?>