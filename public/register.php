<?php

    // configuration
    require("../includes/config.php");
	
    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
		// validate submission
		if ($_POST["password"] == $_POST["confirm"] &&
			!empty($_POST["fname"]) && 
			!empty($_POST["username"]) && 
			!empty($_POST["password"]) && 
			!empty($_POST["google-acc"])
		)
        {
			// cleaning up the data
			if (!preg_match("/^[a-zA-Z]*$/", $_POST["fname"]) && preg_match("/^[a-zA-Z ]*$/", $_POST["lname"]))
				render("register-form.php", ["apology"=>"Only letters of the English Alphabet allowed in First and Last name. If you have a middle name, or special characters, leave them out here and ou can put them back in the display name on your profile.", "repopulate"=>$_POST]);
			else if (!preg_match("/^[a-zA-Z0-9.]*$/", $_POST["username"]))
				render("register-form.php", ["apology"=>"Only letters, numbers, and dot allowed in the Edunet Username.", "repopulate"=>$_POST]);
			else if (!filter_var($_POST["google-acc"], FILTER_VALIDATE_EMAIL))
				render("register-form.php", ["apology"=>"Invalid format of your Google Account.", "repopulate"=>$_POST]);
			else
			{
				// setting data defaults
				if(!isset($_POST["access"]) || ($_POST["access"] != "Student" && $_POST["access"] != "Coach" && $_POST["access"] != "General" && $_POST["access"] != "Premium" && $_POST["access"] != "Special" && $_POST["access"] != "Developer"))
				$_POST["access"] = "General";

				// query into the database to add the user with all his details
				@$register_flag = query("INSERT INTO users (`fname`, `lname`, `username`, `password`, `access`, `googleAcc`)
                    VALUES(?, ?, ?, ?, ?, ?)", htmlspecialchars($_POST["fname"]),
                    htmlspecialchars($_POST["lname"]), htmlspecialchars($_POST["username"]), crypt($_POST["password"]),
                    htmlspecialchars($_POST["access"]), htmlspecialchars($_POST["google-acc"]));

				// handle exception if query could not be completed
				if ($register_flag === false)
					render("register-form.php", ["apology" => "Failed to complete query. Username or Google Account might already be registered.", "repopulate"=>$_POST]);
				
				// if registered, then log the user in
				else
				{
					// query information about the user from the database
					$rows = query("SELECT LAST_INSERT_ID() AS id");
	
					// store id of user having logged him in
                    /** @var Array of Associative Arrays $rows */
                    $_SESSION["id"] = $rows[0]["id"];
	
					// store quick access data for display on web pages
					$_SESSION["name"] = $rows[0]["fname"] . " " . $rows[0]["lname"];
					$_SESSION["access"] = $rows[0]["access"];
	
					// redirect to home page after logging the user in
					if($_SESSION["access"] == "Developer")
						redirect(CONTROLLER."/index.php");
					else
						redirect(CONTROLLER."/schools.php");
				}
			}
        }
        // if all required fields are not filled
        else
            render("register-form.php", ["apology" => "Please fill out the whole the form. All form field are compulsory.", "repopulate"=>array_filter($_POST)]);
    }
    // if no POST is received, render form
    else
        render("register-form.php");