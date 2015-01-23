<?php
	require_once("../includes/config.php");
	$file_to_title = [
		"about" => "About Us",
		"courseware" => "Courseware",
		"gallery" => "Gallery",
		"home" => "Home",
		"management" => "Management",
		"news" => "Announcements",
		"results" => "Results"
	];
	$file_to_navpos = [
		"about" => "about",
		"courseware" => "courseware",
		"gallery" => "gallery",
		"home" => "home",
		"management" => "management",
		"news" => "announcements",
		"results" => "results"
	];
	extract($_GET);
	if(!isset($file)) $file = "home";
	if(!isset($file_to_title[$file])) $file = "home";
	$title = $file_to_title[$file];
	$navpos = $file_to_navpos[$file];
	if($file != "courseware")
		render("header-bootstrap.php", ["title" => $title, "navpos" => $navpos]);
	render($file.".html");
    render("footer-bootstrap.php", ["title" => $title, "navpos" => $navpos]);
