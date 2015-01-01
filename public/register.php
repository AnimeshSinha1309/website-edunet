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
			// query into the database to add the user with all his details
            @$register_flag = query("INSERT INTO users (
				`fname`,					`lname`, 					`username`, 				`password`,
				`mobile`,					`access`,					`googleAcc`,				`facebookAcc`,
				`githubAcc`,				`stackoverflowAcc`,			`microsoftAcc`,				`introYoutube`,
				`introText`,				`interestTags`,				`interestPrimary`,			`profilePic`,
				`school`,					`class`
			) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)",
				$_POST["fname"],			$_POST["lname"],			$_POST["username"],			crypt($_POST["password"]),
				$_POST["mobile"], 			$_POST["access"], 			$_POST["google-acc"],		$_POST["facebook-acc"],
				$_POST["github-acc"],		$_POST["stackoverflow-acc"],$_POST["microsoft-acc"],	$_POST["intro-youtube"],
				$_POST["intro-text"],		$_POST["interest-tags"],	$_POST["interest-primary"],	$_POST["profile-pic"],
				$_POST["school"],			$_POST["class"]
			);

            // handle exception if query could not be completed
            if ($register_flag === false)
			{
				render("register-form.php", ["apology" => "Failed to completer signup. Database Error."]);
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
        // if all required fields are not filled
        else
        {
            render("register-form.php", ["title" => "Register", "apology" => "Please fill in the whole of the form. "]);
        }
    }
    // if no POST is recieved, render form
    else
    {
        render("register-form.php");
    }

?>
