<?php

    // configuration
    require("../includes/config.php");

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        if ($_POST["Password"] == $_POST["Conformation"] && !empty($_POST["FirstName"]) && !empty($_POST["LastName"])
         && !empty($_POST["Password"]) && !empty($_POST["Conformation"]) && !empty($_POST["Username"])
         && !empty($_POST["BirthDate"]) && ($_POST["BirthMonth"] != "") && !empty($_POST["BirthYear"])
         && !empty($_POST["School"]) && !empty($_POST["Grade"]) && !empty($_POST["GoogleAcc"]))
        {
            // convert the birthday fields to a timestamp
            $timestamp = $_POST["BirthDate"] . '/' . $_POST["BirthMonth"] . '/' . $_POST["BirthYear"];
            $timestamp = date_create_from_format('d/m/Y', $timestamp);
            $timestamp = date_format($timestamp, 'Y-m-d');
            
            // TODO: Check if all data is valid
            // query into the database to add the user with all his details
            if(!isset($_POST["Intro"])) $_POST["Intro"] = NULL;
            $register_flag = query("INSERT INTO users (firstname, lastname, password, username, birthday, school, grade, googleacc, access, intro) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)", 
            $_POST["FirstName"], $_POST["LastName"], crypt($_POST["Password"]), $_POST["Username"], $timestamp, $_POST["School"], $_POST["Grade"], $_POST["GoogleAcc"], $_POST["Account"], $_POST["Intro"]);

            // handle exception if query could not be completed
            if ($register_flag === false)
            {
                // TODO: Check if any of the unique fields clash and display error if so
                render("register_form.php", ["title" => "Register", "apology" => "Failed to completer signup. Database Error."]);
            }
            // if registered, then log the user in
            else
            {
                // query information about the user from the database
                $rows = query("SELECT LAST_INSERT_ID() AS id");
                
                // store id of user having logged him in
                $_SESSION["id"] = $rows[0]["id"];
                
                // store quick access data for easy display on webpages
                $_SESSION["access"] = $rows[0]["access"];
                $_SESSION["name"] = $rows[0]["firstname"] . " " . $rows[0]["lastname"]; 

                // redirect to home page after logging the user in
                redirect(CONTROLLER."/index.php");
            }
        }
        // if all required fields are not filled
        else
        {
            render("register_form.php", ["title" => "Register", "apology" => "Please fill in the whole of the form. "]);
        }
    }
    else
    {
        // if no POST is recieved, render form
        render("register_form.php", ["title" => "Register"]);
    }

?>
