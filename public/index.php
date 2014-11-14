<?php

    // configuration
    require("../includes/config.php");
    
    // get catchnotimplementederror message ready
    if ($_SESSION["access"] == "Developer")
        $catchnotimplementederror = "Work on this page has not yet started. Any plans will be available on the Google
        drive and Google+ page as soon as they are made, and all developers will be notified by Email.";
    else
        $catchnotimplementederror = "Work on this page has not yet started.";

    // render the under development page
    render("under_development.php", ["catchnotimplementederror" => $catchnotimplementederror]);
?>
