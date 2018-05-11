<html>
    <body>
        <form metho="POST">
            <table border="1" align="center">
                <tr>
                    <td>empno</td>
                    <td>ename</td>
                    <td>sal</td>
                </tr>
                <?php
                $con=mysqli_connect("localhost","root","","naresh123");
                $com=mysqli_query($con,"select * from emp");
                while($r=mysqli_fetch_row($com))
                {
                    echo "<tr>";
                    for($i=0;$i<mysqli_num_fields($com);$i++)
                    {
                        echo "<th>$r[$i]</th>";
                    }
                    echo "</tr>";
                }
                mysqli_close($con);
                ?>
            </table>
        </form>    
    </body>
</html>