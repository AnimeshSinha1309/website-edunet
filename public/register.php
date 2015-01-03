<?php

    // configuration
    require("../includes/config.php");
	
    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
		// validate submission
		if ($_POST["password"] == $_POST["cpassword"] && 
			!empty($_POST["fname"]) && 
			!empty($_POST["username"]) && 
			!empty($_POST["password"]) && 
			!empty($_POST["google-acc"])
		)
        {
			// cleaning up the data
			if (!preg_match("/^[a-zA-Z]*$/", $_POST["fname"]) && preg_match("/^[a-zA-Z ]*$/", $_POST["lname"]))
				render("register-form.php", ["apology"=>"Only letters of the English Alphabet allowed in First and Last name.", "repopulate"=>$_POST]);
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
				@$register_flag = query("INSERT INTO users (
					`fname`,										`lname`,
					`username`, 									`password`,
					`mobile`,										`access`,
					`googleAcc`,									`facebookAcc`,
					`githubAcc`,									`stackoverflowAcc`,
					`microsoftAcc`,									`introYoutube`,
					`introText`,									`interestTags`,
					`interestPrimary`,								
					`school`,										`class`
				) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)",
					htmlspecialchars($_POST["fname"]),				htmlspecialchars($_POST["lname"]),
					htmlspecialchars($_POST["username"]),			crypt($_POST["password"]),
					htmlspecialchars($_POST["mobile"]), 			htmlspecialchars($_POST["access"]),
					htmlspecialchars($_POST["google-acc"]),			htmlspecialchars($_POST["facebook-acc"]),
					htmlspecialchars($_POST["github-acc"]),			htmlspecialchars($_POST["stackoverflow-acc"]),
					htmlspecialchars($_POST["microsoft-acc"]),		htmlspecialchars($_POST["intro-youtube"]),
					htmlspecialchars($_POST["intro-text"]),			htmlspecialchars($_POST["interest-tags"]),
					htmlspecialchars($_POST["interest-primary"]),	/* Porfile Picture */
					htmlspecialchars($_POST["school"]),				htmlspecialchars($_POST["class"])
				);
	
				// handle exception if query could not be completed
				if ($register_flag === false)
				{
					render("register-form.php", ["apology" => "Failed to complete query. Username or Google Account might already be registered.", "repopulate"=>$_POST]);
				}
				
				// if registered, then log the user in
				else
				{
					// query information about the user from the database
					$rows = query("SELECT LAST_INSERT_ID() AS id");
	
					// store id of user having logged him in
					$_SESSION["id"] = $rows[0]["id"];
	
					// store quick access data for display on webpages
					$_SESSION["name"] = $rows[0]["fname"] . " " . $row[0]["lname"]; 
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
        {
            render("register-form.php", ["title" => "Register", "apology" => "Please fill in the whole of the form.", "repopulate"=>$_POST]);
        }
    }
    // if no POST is recieved, render form
    else
    {
        render("register-form.php");
    }

?>
