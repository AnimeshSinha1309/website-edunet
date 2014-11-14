<?php

    // configuration
    require("../includes/config.php");
    
    // get catchnotimplementederror message ready
    if ($_SESSION["access"] == "Developer")
        $catchnotimplementederror = "Since this page has a lot of dynamic content, I would need quite a bit of help. This
        page has just started, and has a long way to go before being complete, so please help.";
    else
        $catchnotimplementederror = "Work on this page has not yet started. Dynamic content would take 
        significant time to be prepared.";

    // render the under development page
    render("home.php", ["catchnotimplementederror" => $catchnotimplementederror]);
?>
