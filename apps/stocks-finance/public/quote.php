<?php

    // configuration
    require("../includes/config.php");

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $stock = lookup($_POST["symbol"]);
        if ($stock === false)
        {
            apologize("Did not find the stock symbol in the stock lookup");
        }
        else
        {
            // render the stock values
            render("quote.php", ["title" => "Quote", "stock" => $stock]);
        }
    }
    else
    {
        // else render form
        render("quote_form.php", ["title" => "Quote"]);
    }
?>
