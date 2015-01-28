<?php

	require_once("../../../includes/config.php");
	render("header-admin.php", array("navpos" => "index"));
	$users = query("SELECT type FROM users WHERE 1");
	$data = array();
	foreach ($users as $user)
	{
		if(!isset($data[$user["type"]]))
			$data[$user["type"]] = 0;
		$data[$user["type"]] += 1;
	}
	render("dashboard.php", array("userTypeSplit" => $data));
    render("footer-admin.php");