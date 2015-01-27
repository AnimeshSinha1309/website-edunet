<?php render("header_foundation.php", array("title"=>"Profile", "navpos"=>"home")) ?>
<style> #social{float:right; margin-right:0; width:125px; padding:0px;} </style>
<main>
  <div class="large-10 columns nopadding">
	<div style="background-color:#EEE; width:120%;">
      <dl class="tabs" data-tab>
        <dd class="active"><a href="#profile">Profile</a></dd>
        <dd><a href="#favourites">Favourites</a></dd>
        <dd><a href="#tasks">Tasks</a></dd>
        <dd><a href="#portfolio">Portfolio</a></dd>
        <dd><a href="#friends">Friends</a></dd>
      </dl>
    </div>
    <div class="tabs-content">
      <div class="content active" id="profile">
        <div style="margin-left:35px;">
          <h1>Animesh Sinha <small>Profile Information</small> <a href="edit-profile.php"><span style="margin-top:25px; float:right; font-size:medium;"><i class="fa fa-pencil"></i></span></a></h1>
        </div>
      </div>
      <div class="content" id="favourites">
        <div style="margin-left:35px;">
          <h3>Sorry, we are still building our home page. We will be there, but it can take some time. This is the place for favourites.</h3>
        </div>
      </div>
      <div class="content" id="tasks">
        <div style="margin-left:35px;">
          <h3>Sorry, we are still building our home page. We will be there, but it can take some time. This is the place for tasks.</h3>
        </div>
      </div>
      <div class="content" id="portfolio">
        <div style="margin-left:35px;">
          <h3>Sorry, we are still building our home page. We will be there, but it can take some time. This is the place for portfolio.</h3>
        </div>
      </div>
      <div class="content" id="friends">
        <div style="margin-left:35px;">
          <h3>Sorry, we are still building our home page. We will be there, but it can take some time. This is the place for friends.</h3>
        </div>
      </div>
    </div>
  </div>
  <div class="large-2 columns nopadding" id="social">
    <a href="http://www.github.com" target="_blank" class="button social-github nomargin full-width">
      <span><i class="fa fa-github fa-2x"></i></span>
    </a>
    <a href="http://plus.google.com" target="_blank" class="button social-googleplus nomargin full-width">
      <span><i class="fa fa-google-plus fa-2x"></i></span>
    </a>
    <a href="http://www.facebook.com" target="_blank" class="button social-facebook nomargin full-width">
      <span><i class="fa fa-facebook fa-2x"></i></span>
    </a>
    <a href="http://www.linkedin.com" target="_blank" class="button social-linkedin nomargin full-width">
      <span><i class="fa fa-linkedin fa-2x"></i></span>
    </a>
    <a href="http://www.twitter.com" target="_blank" class="button social-twitter nomargin full-width">
      <span><i class="fa fa-twitter fa-2x"></i></span>
    </a>
    <a href="http://www.youtube.com" target="_blank" class="button social-youtube nomargin full-width">
      <span><i class="fa fa-youtube fa-2x"></i></span>
    </a>
    <a href="http://www.stackoverflow.com" target="_blank" class="button social-stackoverflow nomargin full-width">
      <span><i class="fa fa-stack-overflow fa-2x"></i></span>
    </a>
    <a href="http://www.stackexchange.com" target="_blank" class="button social-stackexchange nomargin full-width">
      <span><i class="fa fa-stack-exchange fa-2x"></i></span>
    </a>
    <a href="http://www.instagram.com" target="_blank" class="button social-instagram nomargin full-width">
      <span><i class="fa fa-instagram fa-2x"></i></span>
    </a>
  </div>
</main>
<?php render("footer_foundation.php") ?>