<div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Transaction</th>
                <th>Date/Time</th>
                <th>Symbol</th>
                <th>Shares</th>
                <th>Price</th>
            </tr>
        </thead>
        <?php

            foreach ($positions as $position)
            {
                print("<tr>");
                    print("<td>" . $position["type"] . "</td>");
                    print("<td>" . $position["timestamp"] . "</td>");
                    print("<td>" . $position["symbol"] . "</td>");
                    print("<td>" . $position["shares"] . "</td>");
                    print("<td>" . $position["price"] . "</td>");
                print("</tr>");
            }
        ?>
    </table>
</div>
