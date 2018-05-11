<html>
    <body>
        <form method="POST">
            <table border="1">
                <tr>
                    <th>Qty</th>
                    <th>Price</th>
                </tr>   
                <?php
                for($i=1;$i<=10;$i++)
                {
                    echo "<tr>";
                    echo "<th>$i</th>";
                    echo "<th>". $i*10 ."</th>";
                    echo "</tr>";
                }
                ?>
            </table>
        </form>
    </body>
</html>