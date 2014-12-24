<!DOCTYPE html>
<html lang="en">
  <?php require_once("../includes/config.php"); ?>
  <?php if(!isset($navpos)) $navpos = "none"; ?>
  <?php $dev = $_SESSION["access"] === "Developer" ?>
  <head>
    <title> <?php if(isset($title)) echo($title); else echo("Edunet"); ?> </title>
    <link href="/images/favicon.ico" rel="icon"/>
    <link href="/libraries/foundation/css/foundation.css" rel="stylesheet" type="text/css"/>
    <link href="../stylesheets/styles.css" rel="stylesheet" type="text/css"/>
	<link href="/libraries/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
    <link href="/libraries/foundation/icons/foundation-icons/foundation-icons.css" rel="stylesheet" type="text/css"/>
  	<script src="/libraries/foundation/js/vendor/modernizr.js"></script>
  	<script src="/libraries/jquery/jquery-2.1.3.min.js" type="text/javascript"></script>
  	<script src="/libraries/foundation/js/vendor/fastclick.js"></script>
  	<script src="/javascript/elements.js" type="text/javascript"></script>
  	<script src="/libraries/foundation/js/foundation.min.js" type="text/javascript"></script>
  	<script> $(document).ready(function(e) { $(document).foundation(); }); </script>
    <meta name="author" content="Animesh Sinha"/>
    <meta name="title" content="Edunet - The network for schools"/>
    <meta name="description" content="Edunet is a specialized website that makes schools really work. Easy to use, yet super powerful. Helps schools, teachers and, most of all, students"/>
  <body>
    <header>
      <div>
        <nav class="top-bar" data-topbar role="navigation">
          <ul class="title-area">
            <li class="name"><h1><a href="#">Edunet</a></h1></li>
            <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
          </ul>
          <section class="top-bar-section">
            <ul class="right">
              <li class="has-form">
                <div class="row collapse">
                  <div class="large-8 small-9 columns"><input type="text" placeholder="Search Edunet"></div>
                  <div class="large-4 small-3 columns"><a href="#" class="alert button expand">Search</a></div>
                </div>
              </li>
              <li> </li>
              <li <?php if($navpos === "home")echo("class=\"active\""); ?>><a href="index.php">Home</a></li>
              <li class="has-dropdown not-click">
                <a><?php if(isset($_SESSION["name"])) echo($_SESSION["name"]); else echo("Username"); ?></a>
                <ul class="dropdown">
                  <li <?php if($navpos === "dashboard" && $dev)echo("class=\"active\""); ?>><a href="#">Dashboard</a></li>
                  <li <?php if($navpos === "profile" && $dev)echo("class=\"active\""); ?>><a href="#">Profile</a></li>
                  <li><a href="logout.php">Log Out</a></li>
                </ul>
              </li>
            </ul>
            <ul class="left">
              <li <?php if($navpos === "courseware" && $dev)echo("class=\"active\""); ?>><a href="courseware.php">Courseware</a></li>
              <li <?php if($navpos === "developers" && $dev)echo("class=\"active\""); ?>><a href="developers.php">Developers</a></li>
              <li class="has-dropdown not-click">
                <a href="#">More Features</a>
                <ul class="dropdown">
                  <li <?php if($navpos === "schools")echo("class=\"active\""); ?>><a href="schools.php">Schools</a></li>
                  <li <?php if($navpos === "events")echo("class=\"active\""); ?>><a href="events.php">Events</a></li>
                </ul>
              </li>
            </ul>
          </section>
        </nav>
      </div>
    </header>