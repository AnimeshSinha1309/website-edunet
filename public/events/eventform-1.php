<?php

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
//		$file = fopen("/datafiles/events/eventdata-1.csv","w");
//		fputcsv($file, $_POST);
//		fclose($file);
		$list = array
		(
			"George,Griffin,Oslo,Norway",
			"Mckay,Quagmire,Oslo,Norway",
		);
		$file = fopen("../datafiles/events/eventdata-1.csv","w");
		foreach ($list as $line)
		fputcsv($file,explode(',',$line));
		fclose($file);
		
        render("events/eventform-1.php");
    }
    else
    {
        // if no POST is recieved, render form
        render("events/eventform-1.php");
    }

?>