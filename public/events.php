<?php

    // configuration
    require("../includes/config.php");
    
    if (isset($_GET["f"]))
    {
        // render the form controller
        require("events/".$_GET["f"].".php");
    }
    else if (isset($_GET["d"]))
    {
    }
	else
	{
		render("events.php");
	}
?>
