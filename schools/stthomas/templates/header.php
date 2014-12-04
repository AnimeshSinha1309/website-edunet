<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../images/favicon.ico">
    <title>St. Thomas</title>
    <link href="../../../bootstrap/css/bootstrap.css" rel="stylesheet"> <!-- Bootstrap core CSS -->
    <link href="../../../bootstrap/themes/home.css" rel="stylesheet"> <!-- Custom styles for this template -->
    <link href="../stylesheets/styles.css" rel="stylesheet"> <!-- Custom styles for this template -->
    <script src="../../../foundation/js/vendor/jquery.js"></script>
    <script src="../../../bootstrap/js/bootstrap.js"></script>
  </head>
  <body>
	 <!-- NAVBAR
	 ================================================== -->
`    <div class="navbar-wrapper">
      <div class="container">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="./index.php?file=home">St. Thomas</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li <?php if($navpos === "home") echo("class=\"active\""); ?>>
                	<a href="../public/index.php?file=home">Home</a>
                </li>
                <li <?php if($navpos === "announcements") echo("class=\"active\""); ?>>
                	<a href="../public/index.php?file=news">Announcements</a>
                </li>
                <li <?php if($navpos === "about") echo("class=\"active\""); ?>>
                	<a href="../public/index.php?file=about">About</a>
                </li>
                <li <?php if($navpos === "management") echo("class=\"active\""); ?>>
                	<a href="../public/index.php?file=management">Management</a>
                </li>
                <li <?php if($navpos === "gallery") echo("class=\"active\""); ?>>
                	<a href="../public/index.php?file=gallery">Gallery</a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">More <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li <?php if($navpos === "results") echo("class=\"active\""); ?>>
                    	<a href="../public/index.php?file=results">Results</a>
                    </li>
                    <li <?php if($navpos === "staff") echo("class=\"active\""); ?>>
                    	<a href="../public/index.php?file=staff">Staff</a>
                    </li>
                    <li <?php if($navpos === "developer") echo("class=\"active\""); ?>>
                    	<a href="../public/index.php?file=developer">Developer</a>
                    </li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Under Development</li>
                    <li <?php if($navpos === "principal") echo("class=\"active\""); ?>>
                    	<a href="../public/index.php?file=principal">Principal's Desk</a>
                    </li>
                    <li <?php if($navpos === "courseware") echo("class=\"active\""); ?>>
                    	<a href="../public/index.php?file=courseware">Courseware</a>
                    </li>
                    <li class="divider"></li>
                    <li class="dropdown-header">External Links</li>
                    <li><a href="http://www.facebook.com">Facebook</a></li>
                    <li><a href="http://plus.google.com">Google+</a></li>
                  </ul>
                </li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li <?php if($navpos === "dashboard") echo("class=\"active\""); ?>><a href="/public/" class="navbar-dashboard">Dashboard</a></li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>