<?php

	require_once("../../../includes/config.php");
	render("header-admin.php", array("navpos" => "index"));
	$users = query("SELECT type FROM users WHERE 1");
	$data = arrray();
	foreach ($users as $user)
	{
		if(!isset($data[$users["type"]]))
			$data[$users["type"]] = 0;
		$data[$users["type"]] += 1;
	}
	print_r($data);
	exit(1);
	render("dashboard.php", array());