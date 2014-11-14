<?php

    // configuration
    require("../includes/config.php"); 

    if($_SESSION["access"] == "Developer")
    {
        // render events view
        render("events_view.php");
    }
    else
    {
        // render under development page
        render("under_development.php", ["catchnotimplementederror" => "Work on this page is currently going on. 
        If you are a <u>Developer</u>, you may log in and view the current state of the website, and provide feedback."]);
    }
?>

