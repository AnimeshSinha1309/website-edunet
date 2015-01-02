<?php

    // configuration
    require("../includes/config.php"); 

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // TODO: Create a validation password
        // TODO: Track total spent and received
        if (!preg_match("/^\d+$/", $_POST["money"]))
        {
            apologize("Invalid amount.");
        }
        else
        {
            if ($_POST["type"] == "subtract")
                query("UPDATE users SET cash = cash - ? WHERE id = ?", $_POST["money"], $_SESSION["id"]);
            if ($_POST["type"] == "add")
                query("UPDATE users SET cash = cash + ? WHERE id = ?", $_POST["money"], $_SESSION["id"]);
        }
        redirect("/");
    }
    // else render form
    else
    {
        render("cash_form.php", ["title" => "Cash"]);
    }
?>
