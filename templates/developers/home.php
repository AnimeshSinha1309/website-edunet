<?php render("header_foundation.php", ["title" => "Developers", "navpos" => "developers"]) ?>
<main>
  <div class="row text-center">
	<img src="../../images/construction.jpg" class="img-responsive" />
    <hr class="divider"/>
  </div>
  <div class="row">
    <div class="large-6 columns">
      <h1>Our Suggestions and Trending</h1>
      <ul>
        <li>Adobe Dreamweaver</li>
        <li>Origin Netbeans</li>
        <li>Microsoft Visual Studio</li>
        <li>CodeAcademy</li>
        <li>Harvard edX</li>
        <li>JAVA - The Complete Reference</li>
      </ul>
    </div>
    <div class="large-6 columns">
      <h1>Whats for You</h1>
      <ul>
        <li>Physics</li>
        <li>Computers</li>
        <li>School Exams</li>
        <li>Mobile Edunet</li>
        <li>Your Questions</li>
      </ul>
    </div>
  </div>
  <div class="row">
    <div class="large-6 columns">
      <h1>The Question Zone</h1>
      <ul>
        <li>JAVA JPanel</li>
        <li>SPL in C and C++</li>
        <li>Artificial Intelligence</li>
        <li>Ideas Discuss</li>
        <li>Chemical Bonding</li>
      </ul>
    </div>
    <div class="large-6 columns">
      <h1>What students develop - Our Hotpicks</h1>
      <ul>
        <li>Javard JAVA Library</li>
        <li>HTML Template Set</li>
        <li>Moblie Attendance System</li>
        <li>Results Database</li>
      </ul>
    </div>
  </div>
</main>

<!-- For Foundation Icons, put this in your head -->
<link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">
<style>
.full-width {
  max-width: 1400px;
}

.footer {
  background-color: #000000;
  padding: 2rem 4rem;
  text-align: center;
  color: #fff;
}
.footer i {
  font-size: 100px;
}

.footer h4 {
  color: #fff;
  font-size: 1em;
  font-weight: 400;
  text-transform: uppercase;
  margin-top: 2.5rem;
  margin-bottom: 10px;
}
.footer p, .footer a {
  font-weight: 300;
  font-size: .8em;
  color: #fff;
}

@media only screen and (min-width: 40.063em) {
  .footer .columns:nth-child(n+2) {
    border-left: 1px solid #b3b3b3;
    min-height: 280px;
  }
}
.footer-links {
  list-style-type: none;
}
.footer-links li {
  margin-top: .5em;
}
</style>
<!-- Footer -->
<footer class="footer">
  <div class="row full-width">
    <div class="small-12 medium-3 large-4 columns">
      <i class="fi-laptop"></i>
      <p>This is a page to support the projects of all students who do good jobs. It will have everything from Java to C to PHP and SQL. There are also going to be developer tools and discuss page links</p>
    </div>
    <div class="small-12 medium-3 large-4 columns">
      <i class="fi-html5"></i>
      <p>Please keep in mind that when you are developing ideas and codes should be in accordance with our site rules, which are basically following Web 2.0, keeping themes, interactivity, etc.</p>
    </div>
    <div class="small-12 medium-6 large-4 columns">
      <h4>Work with me</h4>
      <p>Join in and tell us what are your ideas on this page</p>
      <ul class="footer-links">
        <li><a href="#">GitHub</a></li>
        <li><a href="#">Facebook</a></li>
        <li><a href="#">Google</a></li>
      <ul>
    </div>
  </div>
</footer>
<?php render("footer_foundation.php") ?>