<?php

    // configuration
    require("../includes/config.php"); 

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $max = query("SELECT shares FROM shares WHERE id = ? AND symbol = ?", $_SESSION["fin-id"], $_POST["sold"]);
        if (empty($_POST["shares"]) || $_POST["shares"] == $max[0]["shares"])
        {
            $arr = lookup($_POST["sold"]);
            $total = $arr["price"] * $max[0]["shares"];
            query("UPDATE users SET cash = cash + ? WHERE id = ?", $total, $_SESSION["fin-id"]);
            query("DELETE FROM `shares` WHERE `id` = ? AND `symbol` = ?", $_SESSION["fin-id"], $_POST["sold"]);
        }
        else if ($_POST["shares"] < $max && $_POST["shares"] > 0)
        {
            $arr = lookup($_POST["sold"]);
            $total = $arr["price"] * $_POST["shares"];
            query("UPDATE users SET cash = cash + ? WHERE id = ?", $total, $_SESSION["fin-id"]);
            query("UPDATE shares SET shares = shares - ? WHERE id = ? AND symbol = ?", $_POST["shares"], $_SESSION["fin-id"], $_POST["sold"]);
        }
        else if ($_POST["shares"] > $max)
        {
            apologize("You don't have that many stocks.");
        }
        else
        {
            apologize("The Stock could not be sold. Please try again.");
        }
        query("INSERT INTO history(id, type, timestamp, symbol, shares, price) VALUES (?,'SELL',CURRENT_TIMESTAMP,?,?,?)", $_SESSION["fin-id"], $_POST["sold"], $_POST["shares"], $arr["price"]);
        redirect("/");
    }
    // else render form
    else
    {
        $stocks = query("SELECT symbol FROM shares WHERE id = ?", $_SESSION["fin-id"]);
        render("sell_form.php", ["title" => "Sell", "stocks" => $stocks]);
    }

?>
