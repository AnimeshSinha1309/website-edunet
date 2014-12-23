<?php

    // configuration
    require("../includes/config.php"); 

    // render under development page
    render("under_development.php", ["catchnotimplementederror" => "Some subsections of this page have been built in part.
    Development of the index page has not yet started. Redirect to <a href=\"".SCHOOLS."/stthomas/public/index.php\"> 
    Home page for St. Thomas School </a>"]);
?>

