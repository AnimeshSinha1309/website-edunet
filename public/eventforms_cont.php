<?php

    // configuration
    require("../includes/config.php");
    
    if (isset($_GET["f"]))
    {
        // render the form controller
        require("../public/event_forms/".$_GET["f"].".php");
    }
    if (isset($_GET["d"]))
    {
        // query the database for the entire data on registerations
        $rows = query("SELECT * FROM " . $_GET["d"]);

        // render the template to show the signup database
        render("events_showdata.php", ["rows" => $rows]);
    }
?>
