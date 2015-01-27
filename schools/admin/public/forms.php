<?php

	require_once("../../../includes/config.php");
	render("header-admin.php", array("navpos" => "forms"));
	render("forms.php");
    render("footer-admin.php");