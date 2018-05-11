<?php
if(isset($_POST["s1"]))
{
    $m=$_POST["mks"];
    switch($m)
    {
        case($m>80&&$m<=100):
            echo "Grade A";
            break;
        case($m>60&&$m<=80):
            echo "Grade B";
            break;
        case($m>40&&$m<=60):
            echo "Grade C";
            break;
        case($m>0&&$m<=40):
            echo "Grade D";
            break;
    }
}
?>
<html>
    <body>
        <form method="POST">
                 EnterMarks:
                <input type="text"name="mks"/>
                <input type="submit"name="s1"value="submit"/>
        </form>
    </body>
</html>