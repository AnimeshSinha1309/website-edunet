<?php
	require_once("../php-includes/config.php");
	if($_SERVER['REQUEST_METHOD'] === "POST")
	{
	}
	else
	{
		require("../templates/header.php");
		require("../templates/bank-handler.php");
		require("../templates/footer.php");
	}
?>
