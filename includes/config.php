<?php

// requirements
require("constants.php");
require("functions.php");

// enable sessions
session_start();

// require authentication for most pages
if (!preg_match("{(?:login|logout|register|501|404|403)\.php$}", $_SERVER["PHP_SELF"]))
{
	if (empty($_SESSION["id"]))
	{
		redirect(CONTROLLER."/login.php");
	}
	else if ($_SESSION["access"] != "Developer")
	{
		if (!preg_match("{(?:schools/index|schools|events)\.php$}", $_SERVER["PHP_SELF"]))
		redirect(CONTROLLER."/notimplemented.php");
	}
}