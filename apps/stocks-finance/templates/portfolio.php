<div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Symbol</th>
                <th>Name</th>
                <th>Shares</th>
                <th>Price</th>
                <th>TOTAL</th>
            </tr>
        </thead>
        <?php

            foreach ($positions as $position)
            {
                print("<tr>");
                    print("<td>" . $position["symbol"] . "</td>");
                    print("<td>" . $position["name"] . "</td>");
                    print("<td>" . $position["shares"] . "</td>");
                    print("<td>" . $position["price"] . "</td>");
                    print("<td>" . ($position["price"] * $position["shares"]) . "</td>");
                print("</tr>");
            }
        ?>
        <tr>
            <td>CASH</td>
            <td></td>
            <td></td>
            <td></td>
            <td><?php echo($cash) ?></td>
        </tr>
    </table>
</div>
<div>
    <a href="logout.php">Log Out</a>
</div>
