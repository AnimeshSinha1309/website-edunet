<?php
	require_once("../includes/config.php");
	if(empty($_GET["group"]))
	{
		redirect($_SERVER['PHP_SELF'].'?group=dvphy');
	}
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		if(isset($_POST["post"]) && isset($_POST["title"]))
		{
			query("INSERT INTO `postbook` (`sender`, `post`, `title`, `group`) VALUES (?, ?, ?, ?)", htmlspecialchars($_SESSION["name"]), htmlspecialchars($_POST["post"]), htmlspecialchars($_POST["title"]), htmlspecialchars($_GET["group"]));
			$message = "We have posted for you";
		}
		else 
			$message = "Please type in your post";
		redirect($_SERVER['PHP_SELF'].'?group='.$_GET["group"]);
	}
	$postsData = json_encode(query("SELECT `sender`, `post`, `title` FROM `postbook` WHERE `group` = ?", $_GET["group"]));
	render("postbook/postbook.php", array("data" => $postsData));
 ?>