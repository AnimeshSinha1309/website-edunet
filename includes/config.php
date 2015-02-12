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
		if (preg_match("{(?:applications|courseware)\.php$}", $_SERVER["PHP_SELF"]))
		redirect("/siteerrors/501.php");
	}
}

set_error_handler(function(int $errno , string $errstr) {
        redirect("/siteerrors/501.php");
    }
);