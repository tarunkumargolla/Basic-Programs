<html>
    <body>
        <form metho="POST">
            <table border="1">
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
                    echo "<th>$r[0]</th>";
                    echo "<th>$r[1]</th>";
                    echo "<th>$r[2]</th>";
                    echo "</tr>";
                }
                ?>
            </table>
        </form>    
    </body>
</html>