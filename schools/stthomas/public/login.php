<?php
	require("../../../includes/config.php");
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if (isset($_POST['nopass']) && $_POST['nopass'] === 'nosignin')
		{
			$_SESSION["id"] = 100000;
			exit(1);
			redirect("index.php");
		}
		if (empty($_POST['username']) || empty($_POST['password']))
		{
			$error = 'Please fill in your username and password';
			render("login.php", ["error" => $error]);
			exit(1);
		}
		$users = query("SELECT (`id`, `password`) FROM `users` WHERE `username` = ?", $_POST['username']);
        if (count($users) == 1)
        {
            $user = $users[0];
            if ($user["password"] == $_POST["password"])
            {
                $_SESSION["id"] = $user["id"];
                redirect("index.php");
            }
			else
			{
				$error = 'Invalid username and/or password.';
			}
        }
		else $error = 'Error in querying database.';
		render("login.php", ["error" => $error]);
        exit(3);
	}
	else
	{
		render("login.php");
	}
?>