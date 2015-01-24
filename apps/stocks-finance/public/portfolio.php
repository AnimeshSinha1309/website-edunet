<?php

    // get the values to display
    $rows = query("SELECT * FROM shares WHERE id = ?", $_SESSION["fin-id"]);

    $positions = [];
    foreach ($rows as $row)
    {
        $stock = lookup($row["symbol"]);
        if ($stock !== false)
        {
            $positions[] = [
                "name" => $stock["name"],
                "price" => $stock["price"],
                "shares" => $row["shares"],
                "symbol" => $row["symbol"],
            ];
        }
    }
    $cash = query("SELECT cash FROM users WHERE id = ?", $_SESSION["fin-id"]);
    
    // render portfolio
    render("portfolio.php", ["title" => "Portfolio", "positions" => $positions, "cash" => $cash[0]["cash"]]);

?>
