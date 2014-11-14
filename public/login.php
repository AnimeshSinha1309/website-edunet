<?php

    // configuration
    require("../includes/config.php"); 

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        if (empty($_POST["Email"]))
        {
            render("login_form.php", ["title" => "Log In", "apology" => "You must provide your Email."]);
            exit(1);
        }
        else if (empty($_POST["Password"]))
        {
            render("login_form.php", ["title" => "Log In", "apology" => "You must provide your Password."]);
            exit(2);
        }

        // query database for user
        $rows = query("SELECT * FROM users WHERE googleacc = ?", $_POST["Email"]);

        // if we found user, check Password
        if (count($rows) == 1)
        {
            // first (and only) row
            $row = $rows[0];

            // compare password of user's input against password that's in database
            if (crypt($_POST["Password"], $row["password"]) == $row["password"])
            {
                // remember that user's now logged in by storing user's ID in session
                $_SESSION["id"] = $row["id"];
                
                // store quick access data for display on webpages
                $_SESSION["name"] = $row["firstname"] . " " . $row["lastname"]; 
                $_SESSION["access"] = $row["account"];

                // redirect to portfolio
                redirect(CONTROLLER."/");
            }
        }

        // else apologize
        render("login_form.php", ["apology" => "Invalid Email and/or Password."]);
        exit(3);
    }
    else
    {
        // else render form
        render("login_form.php");
    }

?>
