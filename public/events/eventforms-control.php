<?php

    // configuration
    require("../../includes/config.php");
    
    if (isset($_GET["f"]))
    {
        // render the form controller
        require("events".$_GET["f"].".php");
    }
    if (isset($_GET["d"]))
    {
        // get catchnotimplementederror message ready
        if ($_SESSION["access"] == "Developer")
            $catchnotimplementederror = "Work on this page has not yet started. All developers will be notified of any new data via Github.";
        else
            $catchnotimplementederror = "Work on this page has not yet started.";

        // render the under development page
        render("under_development.php", ["catchnotimplementederror" => $catchnotimplementederror]);
    }
?>
