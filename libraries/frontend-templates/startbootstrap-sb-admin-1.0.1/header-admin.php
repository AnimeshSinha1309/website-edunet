<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Edunet - Adminitrators</title>
  <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <link href="css/sb-admin.css" rel="stylesheet" type="text/css"/>
  <link href="css/morris.css" rel="stylesheet" type="text/css"/>
  <link href="../../../images/favicon.ico" rel="icon"/>
  <link href="../../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
  <?php if(isset($_SESSION["name"])) $user = $_SESSION["name"]; else $user = "Administrator"; ?>
  <script src="../../jquery/jquery-2.1.3.min.js"></script>
  <script src="../../bootstrap/js/bootstrap.min.js"></script>
  <script src="js/raphael.min.js"></script>
  <script src="js/morris.min.js"></script>
  <script src="js/morris-data.js"></script>
  <?php if(isset($special) && $special == "flot") { ?>
  <script src="js/jquery.flot.js"></script>
  <script src="js/jquery.flot.tooltip.min.js"></script>
  <script src="js/jquery.flot.resize.js"></script>
  <script src="js/jquery.flot.pie.js"></script>
  <script src="js/flot-data.js"></script>
  <?php } ?>
</head>
<body>
  <div id="wrapper">
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">Edunet Administrators</a>
      </div>
      <!-- Top Menu Items -->
      <ul class="nav navbar-right top-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
          <ul class="dropdown-menu message-dropdown">
            <li class="message-preview">
              <a href="#">
                <div class="media">
                  <span class="pull-left"><img class="media-object" src="http://placehold.it/50x50" alt=""></span>
                  <div class="media-body">
                    <h5 class="media-heading"><strong><?php echo($user); ?></strong></h5>
                    <p class="small text-muted"><i class="fa fa-clock-o"></i> YesterJohn Smitday at 4:32 PM</p>
                    <p>Lorem ipsum dolor sit amet, consectetur...</p>
                  </div>
                </div>
              </a>
            </li>
            <li class="message-preview">
              <a href="#">
                <div class="media">
                  <span class="pull-left">
                    <img class="media-object" src="http://placehold.it/50x50" alt="">
                  </span>
                  <div class="media-body">
                    <h5 class="media-heading"><strong><?php echo($user); ?></strong>
                    </h5>
                    <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                    <p>Lorem ipsum dolor sit amet, consectetur...</p>
                  </div>
                </div>
              </a>
            </li>
            <li class="message-preview">
              <a href="#">
                <div class="media">
                  <span class="pull-left">
                    <img class="media-object" src="http://placehold.it/50x50" alt="">
                  </span>
                  <div class="media-body">
                    <h5 class="media-heading"><strong><?php echo($user); ?></strong></h5>
                    <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                    <p>Lorem ipsum dolor sit amet, consectetur...</p>
                  </div>
                </div>
              </a>
            </li>
            <li class="message-footer">
              <a href="#">Read All New Messages</a>
            </li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
          <ul class="dropdown-menu alert-dropdown">
            <li><a href="#">Alert Name <span class="label label-default">Alert Badge</span></a></li>
            <li><a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a></li>
            <li><a href="#">Alert Name <span class="label label-success">Alert Badge</span></a></li>
            <li><a href="#">Alert Name <span class="label label-info">Alert Badge</span></a></li>
            <li><a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a></li>
            <li><a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a></li>
            <li class="divider"></li>
            <li><a href="#">View All</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo($user); ?> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#"><i class="fa fa-fw fa-user"></i> Profile</a></li>
            <li><a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a></li>
            <li><a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a></li>
            <li class="divider"></li>
            <li><a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a></li>
          </ul>
        </li>
      </ul>
	  <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
          <li id="sidenav-index"><a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a></li>
          <li id="sidenav-charts"><a href="charts.php"><i class="fa fa-fw fa-bar-chart-o"></i> Charts</a></li>
          <li id="sidenav-tables"><a href="tables.php"><i class="fa fa-fw fa-table"></i> Tables</a></li>
          <li id="sidenav-forms"><a href="forms.php"><i class="fa fa-fw fa-edit"></i> Forms</a></li>
          <li id="sidenav-bootstrap-elements"><a href="bootstrap-elements.php"><i class="fa fa-fw fa-desktop"></i> Bootstrap Elements</a></li>
          <li id="sidenav-bootstrap-grid"><a href="bootstrap-grid.php"><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a></li>
          <li><a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="demo" class="collapse">
              <li><a href="#">Dropdown Item</a></li>
              <li><a href="#">Dropdown Item</a></li>
            </ul>
          </li>
          <li id="sidenav-blank-page"><a href="blank-page.php"><i class="fa fa-fw fa-file"></i> Blank Page</a></li>
        </ul>
      </div>
	  <?php if(isset($navpos)) echo("<script> $('#sidenav-".$navpos."').addClass('active') </script>"); ?>
    </nav>