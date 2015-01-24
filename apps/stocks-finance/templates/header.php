<!DOCTYPE html>
<html>
  <head>
    <?php require_once("../includes/config.php"); ?>
    <link href="../../../dependencies/foundation/css/foundation.min.css" rel="stylesheet" type="text/css"/>
    <link href="../assets/css/styles.css" rel="stylesheet" type="text/css"/>
    <link href="../favicon.ico" rel="icon"/>
    <?php if (isset($title)): ?><title>Stock Finance: <?= htmlspecialchars($title) ?></title>
    <?php else: ?><title>Stock Finance</title><?php endif ?>
  	<script src="/dependencies/jquery/jquery-2.1.3.min.js" type="text/javascript"></script>
  	<script src="/dependencies/foundation/js/foundation.min.js" type="text/javascript"></script>
  	<script> $(document).ready(function(e) { $(document).foundation(); }); </script>
	<script src="../assets/js/scripts.js" type="text/javascript"></script>
  </head>
    <body>
      <nav class="top-bar" data-topbar role="navigation">
        <ul class="title-area">
          <li class="name">
            <h1><a href="../public/">Stocks Finance</a></h1>
          </li>
        </ul>
        <section class="top-bar-section">
          <ul class="right">
            <li><a href="/">Edunet</a></li>
          </ul>
        </section>
      </nav>
      <?php if (!preg_match("{(?:login|logout|register)\.php$}", $_SERVER["PHP_SELF"])): ?>
        <dl class="tabs" data-tab>
          <dd class="active"><a href="#portfolio">Portfolio</a></dd>
          <dd><a href="#quote">Quote</a></dd>
          <dd><a href="#buy">Buy</a></dd>
          <dd><a href="#sell">Sell</a></dd>
          <dd><a href="#history">History</a></dd>
          <dd><a href="#cash">Cash</a></dd>
        </dl>
        <div class="tabs-content">
          <div class="content active" id="portfolio">
            <?php require_once("portfolio.php") ?>
          </div>
          <div class="content" id="quote">
            <p>This is the second panel of the basic tab example. This is the second panel of the basic tab example.</p>
          </div>
          <div class="content" id="buy">
            <p>This is the third panel of the basic tab example. This is the third panel of the basic tab example.</p>
          </div>
          <div class="content" id="sell">
            <p>This is the fourth panel of the basic tab example. This is the fourth panel of the basic tab example.</p>
          </div>
          <div class="content" id="history">
            <p>This is the fifth panel of the basic tab example. This is the fourth panel of the basic tab example.</p>
          </div>
          <div class="content" id="cash">
            <p>This is the sixth panel of the basic tab example. This is the fourth panel of the basic tab example.</p>
          </div>
        </div>
      <?php endif ?>
      <div class="row">