<!DOCTYPE html>
<html lang="en">
  <head>
    <title> Edunet PostBook </title>
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
    <script> $(document).ready(function(e) { radiobutton(); }); </script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Animesh Sinha"/>
    <meta name="title" content="Edunet Postbook"/>
    <meta name="description" content="Edunet's under development networking site"/>
	<style> body{background-color:#DDD !important;} </style>
	<style> div.post{padding:5px;} div.post div{background-color:#FFF; padding:12px;} </style>
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
              <li><a href="/public/index.php">Home</a></li>
              <li class="has-dropdown not-click">
                <a>Developers</a>
                <ul class="dropdown">
                  <li><a href="#">Dashboard</a></li>
                  <li><a href="#">Profile</a></li>
                  <li><a href="logout.php">Log Out</a></li>
                </ul>
              </li>
            </ul>
            <ul class="left">
              <li><a href="/public/courseware.php">Courseware</a></li>
              <li><a href="/public/developers.php">Developers</a></li>
              <li><a href="/public/applications.php">Applications</a></li>
              <li class="has-dropdown not-click">
                <a href="#">More Features</a>
                <ul class="dropdown">
                  <li><a href="/public/schools.php">Schools</a></li>
                  <li><a href="/public/events.php">Events</a></li>
                  <li><a href="/public/represent.php">Represent</a></li>
                </ul>
              </li>
            </ul>
          </section>
        </nav>
      </div>
    </header>
    <div style="margin-top:30px; margin-bottom:25px; margin-left:100px; margin-right:100px;">
      <div class="large-4 columns">
        <div class="columns post">
          <div>
            <h2>Compose</h2><hr style="margin-bottom:20px; margin-top:0px;"/>
            <form>
              <textarea rows="10" cols="20" placeholder="Type in your post here."></textarea>
              <input type="submit" class="button" value="Post"/>
              <ul class="el-radio" data-name="post-type">
              	<li><label class="secondary"> <input /> <span> <i class="fa fa-anchor">         </i> </span> </label></li>
              	<li><label class="secondary"> <input /> <span> <i class="fa fa-android">        </i> </span> </label></li>
              	<li><label class="secondary"> <input /> <span> <i class="fa fa-apple">          </i> </span> </label></li>
              	<li><label class="secondary"> <input /> <span> <i class="fa fa-ambulance">      </i> </span> </label></li>
              	<li><label class="secondary"> <input /> <span> <i class="fa fa-stack-overflow"> </i> </span> </label></li>
              	<li><label class="secondary"> <input /> <span> <i class="fa fa-windows">        </i> </span> </label></li>
              </ul>
            </form>
          </div>
        </div>
      </div>
      <div class="large-8 columns">
        <div class="row">
          <div class="large-6 columns" style="padding:0px;">
            <div class="columns post hoverlight">
              <div>
                <h2>Post Book</h2>
                <p>Coming soon with the post, but till then, please settle with this. After all, this is just the testing version.</p>
              </div>
            </div>
            <div class="columns post hoverlight">
              <div>
                <h2>Post Book <small>Animesh Sinha</small></h2>
                <p>Coming soon with the post, but till then, please settle with this. After all, this is just the testing version.</p>
              </div>
            </div>
            <div class="columns post hoverlight">
              <div>
                <h2>Post Book</h2>
                <p>Coming soon with the post, but till then, please settle with this. After all, this is just the testing version. OK, so I will expand here. Get a larger post, and I suppose that will cause some serious problems. Porbably the structuring has gone wrong. Oh, I see it hasn't!</p>
              </div>
            </div>
            <div class="columns post hoverlight">
              <div>
                <h2>Post Book</h2>
                <p>Coming soon with the post, but till then, please settle with this. After all, this is just the testing version.</p>
              </div>
            </div>
            <div class="columns post hoverlight">
              <div>
                <h2>Post Book</h2>
                <p>Coming soon with the post, but till then, please settle with this. After all, this is just the testing version.</p>
              </div>
            </div>
            <div class="columns post hoverlight">
              <div>
                <h2>Post Book</h2>
                <p>Coming soon with the post, but till then, please settle with this. After all, this is just the testing version.</p>
              </div>
            </div>
          </div>
          <div class="large-6 columns" style="padding:0px;">
            <div class="columns post hoverlight">
              <div>
                <h2>Post Book</h2>
                <p>Coming soon with the post, but till then, please settle with this. After all, this is just the testing version.</p>
              </div>
            </div>
            <div class="columns post hoverlight">
              <div>
                <h2>Post Book</h2>
                <p>Coming soon with the post, but till then, please settle with this. After all, this is just the testing version.</p>
              </div>
            </div>
            <div class="columns post hoverlight">
              <div>
                <h2>Post Book</h2>
                <p>Coming soon with the post, but till then, please settle with this. After all, this is just the testing version.</p>
              </div>
            </div>
            <div class="columns post hoverlight">
              <div>
                <h2>Post Book</h2>
                <p>Coming soon with the post, but till then, please settle with this. After all, this is just the testing version.</p>
              </div>
            </div>
            <div class="columns post hoverlight">
              <div>
                <h2>Post Book</h2>
                <p>Coming soon with the post, but till then, please settle with this. After all, this is just the testing version.</p>
              </div>
            </div>
            <div class="columns post hoverlight">
              <div>
                <h2>Post Book</h2>
                <p>Coming soon with the post, but till then, please settle with this. After all, this is just the testing version.</p>
              </div>
            </div>
            <div class="columns post hoverlight">
              <div>
                <h2>Post Book</h2>
                <p>Coming soon with the post, but till then, please settle with this. After all, this is just the testing version.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</head>