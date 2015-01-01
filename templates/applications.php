<?php render("header_foundation.php", ["title" => "Applications", "navpos" => "applications"]) ?>
<main>
  <div class="row" style="margin-top:50px;">
	<a href="/apps/expense-monitor/expense-monitor.php" class="large-5 columns text-center border-box fluid">
	  <img src="../images/applications/expense-monitor.png" />
      <div class="container">
        <h1 class="condensed">Expense Monitor</h1>
      </div>
      <hr/>
      <div class="container">
        <p><strong>This app will make it so easy to keep track of income and expenses, and manage them effectively. Throw away your business diary, because this is the new way to do things.</strong></p>
      </div>
    </a>
  </div>
</main>
<?php render("footer_foundation.php") ?>