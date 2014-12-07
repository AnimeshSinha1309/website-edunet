<?php render("header_foundation.php", ["title" => "Home", "navpos" => "home"]) ?>
<link href="../stylesheets/events.css" rel="stylesheet" type="text/css"/>
<main>
  <div id="all-content-wrapper" class="row">
    <div id="container-sidebar" class="large-3 medium-4 columns">
      <div class="hide-for-small">
        <div class="sidebar">
          <ul class="side-nav">
            <li class="heading"><a>Olympiads</a></li>
            <li class="active"><a href="#">Junior Science (NSEJS)</a></li>
            <li><a href="#">Physics (NSEP)</a></li>
            <li><a href="#">Chemistry (NSEC)</a></li>
            <li><a href="#">Biology (NSEB)</a></li>
            <li><a href="#">Astronomy (NSEA)</a></li>
            <li class="heading"><a>Quizzes</a></li>
            <li><a href="#">Tata Steel Quiz</a></li>
            <li><a href="#">Vodafone Quiz</a></li>
            <li><a href="#">BournVita Quiz</a></li>
            <li class="heading"><a>Sports</a></li>
            <li><a href="#">Zonal Atheletics Meet</a></li>
            <li><a href="#">Sports Day</a></li>
            <li class="heading"><a>School</a></li>
            <li><a href="#">Mid Term Exams</a></li>
          </ul>
        </div>
      </div>
    </div>
  <div id="container-maincontent" class="large-9 medium-8 small-12 columns">
    <div class="row">
      <div class="large-4 columns">
        <div class="item-wrapper">
          <div class="img-wrapper">
            <a href="../public/eventforms_cont.php?f=event_1" class="button expand add-to-cart">View Form</a>
            <a href="#"><img src="../images/events/events-juniorscience-2014.jpg"></a>
          </div>  
          <a href="#"><h3>NSEJS</h3></a>
          <h5>23 November 2014</h5>
          <p>The National Standardized Examination in Junior Science is the first stage of the international olympiad, and is one of the most prestigious exams in the country.</p>
        </div>  
      </div>
    </div>
  </div>
</main>
<?php render("footer_foundation.php") ?>