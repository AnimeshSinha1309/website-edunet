<?php

    // your database's name
	if (preg_match("/schools\//", $_SERVER["PHP_SELF"]))
		define("DATABASE", "schools");
	else if (preg_match("/apps\/expense-manager\//", $_SERVER["PHP_SELF"]))
		define("DATABASE", "applications-expensemanager");
	else if (preg_match("/apps\/expense-monitor\//", $_SERVER["PHP_SELF"]))
		define("DATABASE", "applications-stocksfinance");
	else
    	define("DATABASE", "edunet");

    // your database's password
    define("PASSWORD", "crimson");

    // your database's server
    define("SERVER", "localhost");

    // your database's username
    define("USERNAME", "jharvard");
    
    // links to resources
    define("IMAGES", "/images");
    define("STYLESHEETS", "/stylesheets");
    define("CONTROLLER", "/public");
    define("TEMPLATES", "/templates");
    define("INCLUDES", "/includes");
    define("JAVASCRIPT", "/javascript");
    
    // links to subsections
    define("SCHOOLS", "/schools");
