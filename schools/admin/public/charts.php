<?php

	require_once("../../../includes/config.php");
	render("header-admin.php", array("navpos" => "charts"));
	render("charts.php");
    render("footer-admin.php");