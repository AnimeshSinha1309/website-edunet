<?php

    require("../includes/config.php"); 
    
    if($_SESSION["access"] == "Developer")
    {
        render("developers/home.php");
    }
    else
    {
        render("developers/home.php");
    }
?>
