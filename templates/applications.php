<?php render("header_foundation.php", array("title" => "Applications", "navpos" => "applications")) ?>
<main>
  <div class="row text-center" style="margin-top:50px;">
	<a href="/apps/expense-manager/index.php" class="large-5 columns border-box black" style="margin-right:20px;">
	  <img src="../images/applications/expense-monitor.png" height="666" width="1365" />
      <div class="container">
        <h1 class="condensed">Expense Monitor</h1>
      </div>
      <hr/>
      <div class="container">
        <p><strong>This app will make it so easy to keep track of income and expenses, and manage them effectively. Throw away your business diary, because this is the new way to do things.</strong></p>
      </div>
    </a>
	<a href="/apps/stocks-finance/public/index.php" class="large-5 columns border-box black" style="margin-right:20px;">
	  <img src="../images/applications/stocks-finance.png" height="666" width="1365" />
      <div class="container">
        <h1 class="condensed">Stocks Finance</h1>
      </div>
      <hr/>
      <div class="container">
        <p><strong>Ever thought you could be an expert at the stock market but are unwilling to take te risks. Or just want to try out before going in. Try out our real time stock market simulation.</strong></p>
      </div>
    </a>
    <div class="large-1 columns">
    </div>
  </div>
</main>
<?php render("footer_foundation.php") ?>