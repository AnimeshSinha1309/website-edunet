<?php
	require_once("../includes/config.php");
	if($_SERVER['REQUEST_METHOD'] === "POST")
	{
		if(empty($_POST['date'])) $_POST['date'] = date("Y-m-d");
		@$register_flag = query("INSERT INTO expensemanager (`userid`, `head`, `category`, `amount`, `comments`, `date`)  VALUES(?, ?, ?, ?, ?, ?)", $_SESSION["id"], htmlspecialchars($_POST["head"]), htmlspecialchars($_POST["category"]), htmlspecialchars($_POST["amount"]), htmlspecialchars($_POST["comments"]), htmlspecialchars($_POST["date"]));
		redirect('analyze-graphs.php');
	}
	else
	{
		require("../templates/header.php");
		require("../templates/new-expense.php");
		require("../templates/footer.php");
	}
?>
