<?php

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        render("events/eventform-1.php");
    }
    else
    {
        // if no POST is recieved, render form
        render("events/eventform-1.php");
    }

?>
