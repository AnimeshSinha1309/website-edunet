<?php render("header_foundation.php", ["title" => "Schools", "navpos" => "schools"]) ?>
<main>
  <?php if($_SESSION["access"] !== "Student") { ?>
    <div class="side-tab">
      <a href="/schools/admin/index.php" rel="leanModal" role="button">Administrator</a>
    </div>
  <?php } ?>
  <div class="row" style="margin-top:50px;">
	<a href="/schools/stthomas/public/index.php" class="large-4 columns text-center border-box">
	  <img src="../images/res-logos/logo-google+.jpg" class="img-circle" width="150" height="150" />
      <h1>St. Thomas</h1>
      <p>This part should contain a few introductary lines about the school, what its all about, be a little catchy. This should make people want to come to your page and see what you have got to say.</p>
    </a>
  </div>
</main>
<?php render("footer_foundation.php") ?>