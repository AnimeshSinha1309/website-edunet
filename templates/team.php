<?php require("../includes/config.php"); ?>
<?php render("header_foundation.php", ["title" => "Developers Team", "navpos" => "home"]) ?>
<link href="../libraries/foundation/css/foundation.css" rel="stylesheet" type="text/css" />
<main class="container">
  <div>
  	<div class="row">
      <br/>
      <h1>
      	Our Development Team<br/>
        <small>Our brilliant students organization with a bunch of really enthusiastic members.</small>
      </h1>
      <hr/>
    </div>
  	<div class="row">
      <div class="small-3 columns">
      	<img src="../images/avatar-blank.png" class="th" height="180" width="180" />
      </div>
      <div class="small-7 columns">
        <div class="row">
          <h2>Animesh Sinha</h2>
        </div>
        <div class="row">
          A short description, or actually, long about me.
        </div>
      </div>
      <div class="small-2 columns">
        <br/>
      	<img src="../images/res-logos/logo-facebook.png" height="50" width="50" style="margin-left:10px; margin-bottom:10px;"/>
        <img src="../images/res-logos/logo-microsoft.jpg" height="50" width="50" style="margin-left:10px; margin-bottom:10px;"/>
      	<img src="../images/res-logos/logo-google+.jpg" height="50" width="50" style="margin-left:10px; margin-bottom:10px;"/>
        <img src="../images/res-logos/logo-linkedin.png" height="50" width="50" style="margin-left:10px; margin-bottom:10px;"/>
      </div>
    </div>
    <br/><br/>
  	<div class="row">
	  <div id="collaborator-01" class="collaborator small-12 medium-4 large-2 columns text-center">
        <img src="../images/avatar-blank.png" class="th" height="180" width="180" />
        <strong>Yash Kumar</strong>
      </div>
	  <div id="collaborator-02" class="collaborator small-12 medium-4 large-2 columns text-center">
        <img src="../images/avatar-blank.png" class="th" height="180" width="180" />
        <strong>Gaurav Anand</strong>
      </div>
	  <div id="collaborator-03" class="collaborator small-12 medium-4 large-2 columns text-center">
        <img src="../images/avatar-blank.png" class="th" height="180" width="180" />
        <strong>Abhinav Apurva</strong>
      </div>
	  <div id="collaborator-04" class="collaborator small-12 medium-4 large-2 columns text-center">
        <img src="../images/avatar-blank.png" class="th" height="180" width="180" />
        <strong>Om Krishna</strong>
      </div>
	  <div id="collaborator-05" class="collaborator large-2 columns text-center">
        <img src="../images/avatar-blank.png" class="th" height="180" width="180" />
        <strong>Nimagna Jain</strong>
      </div>
	  <div id="collaborator-06" class="collaborator large-2 columns text-center">
        <img src="../images/avatar-blank.png" class="th" height="180" width="180" />
        <strong>Areeb Hussain</strong>
      </div>
    </div>
    <div class="row">
      <div class="hide description text-justify" id="description-06">
    </div>
  </div>
</main>
<?php render("footer_foundation.php") ?> 