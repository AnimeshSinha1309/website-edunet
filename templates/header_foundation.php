<!DOCTYPE html>
<html lang="en">
  <?php require_once("../includes/config.php"); ?>
  <?php if(!isset($navpos)) $navpos = "none"; ?>
  <?php if(isset($_SESSION["access"])) $dev = $_SESSION["access"] === "Developer"; else $dev = false; ?>
  <head>
    <title> <?php if(isset($title)) echo($title); else echo("Edunet"); ?> </title>
    <link href="/images/favicon.ico" rel="icon"/>
    <link href="/dependencies/foundation/css/foundation.css" rel="stylesheet" type="text/css"/>
	<link href="/dependencies/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
    <link href="/dependencies/foundation/icons/foundation-icons/foundation-icons.css" rel="stylesheet" type="text/css"/>
    <link href="/stylesheets/elements.css" rel="stylesheet" type="text/css"/>
	<script src="/dependencies/foundation/js/vendor/modernizr.js"></script>
  	<script src="/dependencies/jquery/jquery-2.1.3.min.js" type="text/javascript"></script>
  	<script src="/dependencies/foundation/js/vendor/fastclick.js"></script>
  	<script src="/javascript/elements.js" type="text/javascript"></script>
  	<script src="/dependencies/foundation/js/foundation.min.js" type="text/javascript"></script>
  	<script> $(document).ready(function(e) { $(document).foundation(); }); </script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Animesh Sinha"/>
    <meta name="title" content="Edunet - The network for schools"/>
    <meta name="description" content="Edunet is a specialized website that makes schools really work. Easy to use, yet super powerful. Helps schools, teachers and, most of all, students"/>
  	<?php if(isset($stylesheet)): ?><link href="/stylesheets/<?php echo($stylesheet); ?>.css" rel="stylesheet" type="text/css"/><?php endif ?>
  	<?php if(isset($script)): ?><script src="/javascript/<?php echo($script); ?>.js" type="text/javascript"></script><?php endif ?>
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
              <?php if($dev){ ?><li class="has-form">
                <div class="row collapse">
                  <div class="large-8 small-9 columns"><input type="text" placeholder="Search Edunet"></div>
                  <div class="large-4 small-3 columns"><a href="#" class="alert button expand">Search</a></div>
                </div>
              </li><?php } ?>
              <li> </li>
              <?php if($dev){ ?><li <?php if($navpos === "home")echo("class=\"active\""); ?>><a href="/public/index.php">Home</a></li><?php } ?>
              <li class="has-dropdown not-click">
                <a><?php if(isset($_SESSION["name"]) && $_SESSION["name"] != " ") echo($_SESSION["name"]); else echo("Username"); ?></a>
                <ul class="dropdown">
                  <?php if($dev){ ?><li <?php if($navpos === "dashboard")echo("class=\"active\""); ?>><a href="#">Dashboard</a></li><?php } ?>
                  <?php if($dev){ ?><li <?php if($navpos === "profile")echo("class=\"active\""); ?>><a href="#">Profile</a></li><?php } ?>
                  <li><a href="logout.php">Log Out</a></li>
                </ul>
              </li>
            </ul>
            <ul class="left">
              <?php if($dev){ ?><li <?php if($navpos === "courseware")echo("class=\"active\""); ?>><a href="/public/courseware.php">Courseware</a></li><?php } ?>
              <?php if($dev){ ?><li <?php if($navpos === "developers")echo("class=\"active\""); ?>><a href="/public/developers.php">Developers</a></li><?php } ?>
              <?php if($dev){ ?><li <?php if($navpos === "applications")echo("class=\"active\""); ?>><a href="/public/applications.php">Applications</a></li><?php } ?>
              <?php if($dev){ ?><li class="has-dropdown not-click">
                <a href="#">More Features</a>
                <ul class="dropdown"><?php } ?>
                  <li <?php if($navpos === "schools")echo("class=\"active\""); ?>><a href="/public/schools.php">Schools</a></li>
                  <li <?php if($navpos === "events")echo("class=\"active\""); ?>><a href="/public/events.php">Events</a></li>
                  <?php if($dev){ ?><li <?php if($navpos === "represent")echo("class=\"active\""); ?>><a href="/public/represent.php">Represent</a></li><?php } ?>
                <?php if($dev){ ?></ul>
              </li><?php } ?>
            </ul>
          </section>
        </nav>
      </div>
    </header>