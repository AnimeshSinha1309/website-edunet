<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Edunet - Administrators</title>
    <link href="/dependencies/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="../css/sb-admin.css" rel="stylesheet" type="text/css"/>
    <link href="/dependencies/graphing-plugins/morris/morris.css" rel="stylesheet" type="text/css"/>
    <link href="/images/favicon.ico" rel="icon"/>
    <link href="/dependencies/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <?php if(isset($_SESSION["name"])) $user = $_SESSION["name"]; else $user = "Administrator"; ?>
    <script src="/dependencies/jquery/jquery-2.1.3.min.js"></script>
    <script src="/dependencies/bootstrap/js/bootstrap.min.js"></script>
    <script src="/dependencies/graphing-plugins/raphael.min.js"></script>
    <script src="/dependencies/graphing-plugins/morris/morris.min.js"></script>
    <script src="../js/helper.js"></script>
    <script src="../../../dependencies/angular/angular.min.js"></script>
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
            <a class="navbar-brand" href="/index.php">Edunet Administrators</a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            <li class="dropdown">
                <a><i class="fa fa-user"></i> <?php echo($user); ?></a>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li id="sidenav-index"><a href="../public/index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a></li>
                <li id="sidenav-charts"><a href="charts.php"><i class="fa fa-fw fa-bar-chart-o"></i> Analytics</a></li>
                <li id="sidenav-blank-page"><a href="report.php"><i class="fa fa-fw fa-wrench"></i> Report Issue</a></li>
                <li><a href="javascript:" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Add and Edit <i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="demo" class="collapse">
                        <li id="sidenav-forms"><a href="forms.php"><i class="fa fa-fw fa-pencil"></i> Images</a></li>
                        <li id="sidenav-forms"><a href="forms.php"><i class="fa fa-fw fa-pencil"></i> News</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <?php if(isset($navpos)) echo("<script> $('#sidenav-".$navpos."').addClass('active') </script>"); ?>
    </nav>