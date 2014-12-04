<?php
	require("../includes/config.php");
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if (isset($_POST['nopass']) && $_POST['nopass'] === 'nosignin')
		{
			$_SESSION["sts-id"] = 1000;
			redirect("../public/index.php");
			exit(1);
		}
		else if (empty($_POST['username']) || empty($_POST['password']))
		{
			$error = 'Please fill in your username and password';
			render("login.php", ["error" => $error]);
			exit(2);
		}
		$users = query("SELECT (`id`, `password`) FROM `stthomas_users` WHERE `username` = ?", $_POST['username']);
        if (count($users) == 1)
        {
            $user = $users[0];
            if ($user["password"] == $_POST["password"])
            {
                $_SESSION["sts-id"] = $user["id"];
                redirect("index.php");
            }
			else
			{
				$error = 'Invalid username and/or password.';
			}
        }
		else $error = 'Invalid username and/or password.';
		render("login.php", ["error" => $error]);
		
        exit(3);
	}
	else
	{
		render("login.php");
	}
?>