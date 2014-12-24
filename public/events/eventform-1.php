<?php

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        render("events_forms/eventform_1.php");
    }
    else
    {
        // if no POST is recieved, render form
        render("events_forms/eventform_1.php");
    }

?>
