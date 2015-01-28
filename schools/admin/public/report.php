<?php

	require_once("../../../includes/config.php");
	render("header-admin.php", array("navpos" => "blank-page"));
	render("report.php");
    render("footer-admin.php");