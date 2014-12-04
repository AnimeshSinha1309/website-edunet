<?php

    require("../includes/config.php"); 
    
    if($_SESSION["access"] == "Developer")
    {
        render("courseware/search.php");
    }
    else
    {
        render("courseware/search.php");
    }
?>
