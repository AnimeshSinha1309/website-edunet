<!DOCTYPE html>
<html>
  <head>
    <?php require("../includes/config.php"); ?>
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
        <li class="name"><h1><a href="../public/">Stocks Finance</a></h1></li>
      </ul>
      <section class="top-bar-section">
        <ul class="right">
          <li><a href="/">Edunet</a></li>
        </ul>
      </section>
    </nav>
    <dl class="tabs" data-tab>
      <dd class="active"><a href="#portfolio">Portfolio</a></dd>
      <dd><a href="#quote">Quote</a></dd>
      <dd><a href="#buy">Buy</a></dd>
      <dd><a href="#sell">Sell</a></dd>
      <dd><a href="#history">History</a></dd>
      <dd><a href="#cash">Cash</a></dd>
    </dl>
    <div class="tabs-content">
      <div class="content active" id="portfolio"><div class="row"><?php require_once("portfolio.php") ?></div></div>
      <div class="content" id="quote"><div class="row"><?php require_once("quote.php") ?></div></div>
      <div class="content" id="buy"><div class="row"><?php require_once("buy.php") ?></div></div>
      <div class="content" id="sell"><div class="row"><?php require_once("sell.php") ?></div></div>
      <div class="content" id="history"><div class="row"><?php require_once("history.php") ?></div></div>
      <div class="content" id="cash"><div class="row"><?php require_once("cash.php") ?></div></div>
    </div>
  </body>
</html>