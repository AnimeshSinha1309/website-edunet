<?php
	require("includes/config.php");
	if($_SESSION["access"] == "Developer")
		redirect(CONTROLLER."/index.php");
	else
		redirect(CONTROLLER."/schools.php");
?>