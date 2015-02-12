<?php

    // configuration
    require("../includes/config.php");

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        if ($_POST["password"] != $_POST["conformation"])
        {
            apologize("Your password and conformation do not match.");
        }
        else if (empty($_POST["username"]))
        {
            apologize("You must provide your username.");
        }
        else if (empty($_POST["password"]))
        {
            apologize("You must provide your password.");
        }
        else
        {
            $register_flag = query("INSERT INTO users (username, hash, cash) VALUES(?, ?, 10000.00)", $_POST["username"], crypt($_POST["password"]));

            if ($register_flag === false)
            {
                apologise("Sorry, could not register the user. The username may already be taken. Please retry.");   
            }
            else
            {
                $rows = query("SELECT LAST_INSERT_ID() AS id");
                $id = $rows[0]["fin-id"];
                $_SESSION["fin-id"] = $id;
                redirect("./index.php");
            }
        }
    }
    else
    {
        // else render form
        render("header.php");
        render("register_form.php", ["title" => "Register"]);
    }
