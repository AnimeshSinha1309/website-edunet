<?php render("header_foundation.php", ["title" => "Home", "navpos" => "home"]) ?>
<main>
  <div id="all-content-wrapper" class="row">
    <div id="container-sidebar" class="large-3 medium-4 columns">
      <div class="hide-for-small">
        <div class="sidebar">
          <ul class="side-nav">
            <li class="heading"><a>First</a></li>
            <li class="active"><a href="#">Link 1</a></li>
            <li><a href="#">Link 2</a></li>
            <li class="divider"></li>
            <li class="heading"><a>Updates</a></li>
            <li><a href="#">Primary</a></li>
            <li><a href="#">Academic</a></li>
            <li><a href="#">Events</a></li>
            <li><a href="#">Friends</a></li>
            <li><a href="schools.php">School</a></li>
            <li class="heading"><a>Going on</a></li>
            <li><a href="#">Link 5</a></li>
            <li><a href="#">Link 6</a></li>
          </ul>
        </div>
      </div>
    </div>
  <div id="container-maincontent" class="large-9 medium-8 small-12 columns">
    <h1> Under Construction </h1>
    <p class="text-justify"> This part of the website is has a long way to go before it is complete. As the home page requires a lot of dynamic and user specific content, it will probably be developed in a more advanced pahse of development. For the moment. The basic structure is here, and so are the links. So go ahead with other sections of the website. We are sorry for the inconvinience.</p>
    <h1> Links you can follow </h1>
    <h2> <small>Under Development</small> </h2>
    <a href="schools.php" class="button">Schools</a>
    <a href="courseware.php" class="button alert">Dashboard</a>
    <a href="courseware.php" class="button success">Courseware</a>
    <a href="events.php" class="button secondary">Events</a>
    <h2> <small>Development Complete</small> </h2>
    <a href="#" class="button secondary">None</a>
    <h2> <small>Not Yet Started</small> </h2>
    <a href="#" class="button alert">Development</a>
    <a href="#" class="button alert">Discuss</a>
    <a href="#" class="button alert">Help</a>
  </div>
</main>
<?php render("footer_foundation.php") ?>