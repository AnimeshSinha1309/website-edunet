<?php
	require_once("../includes/config.php");
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		if(isset($_POST["post"]) && isset($_POST["title"]))
		{
			query("INSERT INTO `postbook` (`sender`, `post`, `title`) VALUES (?, ?, ?)", $_SESSION["name"], $_POST["post"], $_POST["title"]);
			$message = "We have posted for you";
		}
		else 
			$message = "Please type in your post";
		redirect($_SERVER['PHP_SELF']);
	}
	render("postbook/postbook.php");
 ?>