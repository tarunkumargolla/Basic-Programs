<html>
    <body>
        <form method="POST">
            <table border="1">
                <tr>
                    <th>ename</th>
                    <th>empno</th>
                    <th>sal</th>
                    <th>deptno</th>
                </tr>
                <?php
                $con=mysqli_connect("localhost","root","","naresh");
                $com=mysqli_query($con,"call proc_emp");
                while($r=mysqli_fetch_row($com))
                {
                    echo "<tr>";
                    echo "<th>$r[0]</th>";
                    echo "<th>$r[1]</th>";
                    echo "<th>$r[2]</th>";
                    echo "<th>$r[3]</th>";
                    echo "</tr>";
                }
                mysqli_close($con);
                ?>
            </table>
        </form>
    </body>
</html>