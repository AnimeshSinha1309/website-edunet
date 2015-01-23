<?php

    // configuration
    require_once("../includes/config.php"); 

    // get the values to display
    $rows = query("SELECT * FROM history WHERE id = ?", $_SESSION["fin-id"]);

    $positions = [];
    foreach ($rows as $row)
    {
            $positions[] = [
                "type" => $row["type"],
                "timestamp" => $row["timestamp"],
                "symbol" => $row["symbol"],
                "shares" => $row["shares"],
                "price" => $row["price"],
            ];
    }
    $cash = query("SELECT cash FROM users WHERE id = ?", $_SESSION["fin-id"]);
    
    // render portfolio
    render("history_show.php", ["title" => "History", "positions" => $positions]);

?>
