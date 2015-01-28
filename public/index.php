<?php

    // configuration
    require_once("../includes/config.php");
    
	if ($_SESSION["access"] != "Developer")
		redirect("schools.php");
	
    // render the under development page
    render("portfolio/profile.php");
?>