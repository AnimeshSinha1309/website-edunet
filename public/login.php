<?php

    // configuration
    require("../includes/config.php");

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        if (empty($_POST["email"]))
        {
            render("login-form.php", array("error" => "Please provide your Email ID"));
            exit(1);
        }
        else if (empty($_POST["password"]))
        {
            render("login-form.php", array("error" => "Please type in you password"));
            exit(2);
        }

        // query database for user
        $rows = query("SELECT * FROM users WHERE `googleAcc` = ?", $_POST["email"]);

        // if we found user, check Password
        if (count($rows) == 1)
        {
            // first (and only) row
            $row = $rows[0];

            // compare password of user's input against password that's in database
            if (crypt($_POST["password"], $row["password"]) == $row["password"])
            {
                // remember that user's now logged in by storing user's ID in session
                $_SESSION["id"] = $row["id"];
                
                // store quick access data for display on webpages
                $_SESSION["name"] = $row["fname"] . " " . $row["lname"]; 
                $_SESSION["access"] = $row["access"];

                // redirect to portfolio
				if($_SESSION["access"] == "Developer")
					redirect(CONTROLLER."/index.php");
				else
					redirect(CONTROLLER."/schools.php");
            }
        }

        // else apologize
        render("login-form.php", array("error" => "Invalid Email and/or Password."));
        exit(3);
    }
    else
    {
        // else render form
        render("login-form.php");
    }

?>