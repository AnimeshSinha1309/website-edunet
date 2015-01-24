<?php

require_once("../../../includes/config.php");
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	if (empty($_POST['username']) || empty($_POST['password']))
	{
		$error = 'Please fill in your username and password';
		render("login.php", array("error" => $error));
		exit(2);
	}
	$users = query("SELECT `id`, `password` FROM `users` WHERE `edunet` = ?", $_POST['username']);
	if (count($users) == 1)
	{
		$user = $users[0];
		if ($user["password"] === $_POST["password"])
		{
			$_SESSION["schoolid"] = $user["schoolid"];
			redirect("index.php");
		}
		else
		{
			$error = 'Invalid username and/or password.';
		}
	}
	else if (count($users) == 0)
	{
		$error = 'Invalid username and/or password.';
	}
	else $error = 'Error executing SQL qurey.';
	render("login.php", array("error" => $error));
	
	exit(3);
}
else
{
	render("login.php");
}