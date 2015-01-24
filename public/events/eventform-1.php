<?php

// if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(empty($_POST["age"]) || empty($_POST["pay"]))
	{
		render("events/eventform-1.php", array("error" => "You do not conform to the restrictions"));
	}
	if(isset($_POST["prev_js"]) && isset($_POST["prev_rmo"])) $participation = "Science and Maths";  
	else if(isset($_POST["prev_rmo"])) $participation = "Only Maths";
	else if(isset($_POST["prev_js"])) $participation = "Only Science";
	else $participation = "Neither of these";
	@$line = $_POST["name"] . ',' . $_POST["school"] . ',' . $_POST["section"] . ',' . $_POST["mobile"] . ',' . $_POST["email"] . ',' . 'Checked' . ',' . $_POST["class"] . ',' . $participation . ',' . $_POST["marks"] . ',' . 'Agreed To';
	$file = fopen("../datafiles/events/eventdata-1.csv","a");
	fputcsv($file,explode(',', $line));
	fclose($file);
	
	redirect("/public/events.php");
}
else
{
	// if no POST is recieved, render form
	render("events/eventform-1.php");
}