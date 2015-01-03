<?php

    // configuration
    require("../includes/config.php"); 

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if (lookup($_POST["bought"]) === false)
        {
            apologize("Did not find the stock symbol.");
        }
        $arr = lookup($_POST["bought"]);
        $total = $arr["price"] * $_POST["shares"];
        $temp = query("SELECT cash FROM users WHERE id = ?", $_SESSION["fin-id"]);
        $cash = $temp[0]["cash"];
        if (!preg_match("/^\d+$/", $_POST["shares"]))
        {
            apologize("Invalid number of stocks.");
        }
        if ($total > $cash)
        {
            apologize("You don't have enough cash.");
        }
        else
        {
            query("INSERT INTO shares (id, symbol, shares) VALUES(?, ?, ?) ON DUPLICATE KEY UPDATE shares = shares + ?", $_SESSION["fin-id"], strtoupper($_POST["bought"]), $_POST["shares"], $_POST["shares"]);
            query("UPDATE users SET cash = cash - ? WHERE id = ?", $total, $_SESSION["fin-id"]);
            query("INSERT INTO history(id, type, timestamp, symbol, shares, price) VALUES (?,'BUY',CURRENT_TIMESTAMP,?,?,?)", $_SESSION["fin-id"], strtoupper($_POST["bought"]), $_POST["shares"], $arr["price"]);
        }
        redirect("index.php");
    }
    // else render form
    else
    {
        render("buy_form.php", ["title" => "Buy"]);
    }
?>
