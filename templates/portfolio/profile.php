<?php render("header_foundation.php", array("title"=>"Profile", "navpos"=>"home", "stylesheet"=>"portfolio", "script"=>"portfolio")) ?>
    <main>
        <div class="large-10 columns no-padding">
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
                        <h1>
                            Animesh Sinha <small>Profile Information</small>
                            <a href="#"><span style="margin-top:25px; float:right; font-size:medium;"><i class="fa fa-pencil"></i></span></a>
                        </h1>
                        <div class="row no-margin no-padding">
                            <div class="columns large-9" style="padding-left: 0;">
                                <div class="large-3 columns" style="padding-left: 0;">
                                    <img src="/images/avatar-blank.png" class="th" height="192" width="192" />
                                </div>
                                <div class="border-box large-9 columns" style="padding-top: 15px;">
                                    I guess I could get a few lines of description about the user to whom this portfolio belongs.
                                    Going to be fun, written by the user of course while filling out this profile details. Not more
                                    than 1024 letters, but should be about 500 letters in length. Don't you agree with me? Know
                                    what everyone is like, reading what they wrote about themselves. Telling about their skills,
                                    hobbies, activities, etc.
                                </div>
                            </div>
                            <div class="large-3 columns border-box black">
                                <h2>School</h2>
                                <span>St. Thomas School, Ranchi</span>
                                Class: 9 'A'
                            </div>
                        </div>
                        <hr/>
                        <div>
                            <div class="large-5 columns">
                                <h2>Contact Details</h2>
                                <div class="colors green-edunet large-12" style="padding: 20px;" id="web-details">
                                    <span id="web-symbol" style="margin-right: 25px;"><i class="fa fa-stack-exchange fa-2x"></i></span>
                                    <span id="web-account" style="font-size: 20px;">AnimeshSinha@edunet.com</span>
                                </div>
                            </div>
                            <div class="large-5 large-offset-1 columns">
                                <h2>Circles</h2>
                                <a class="button alert" style="font-size: larger"><span><i class="fa fa-circle-o fa-2x"></i></span> View Public Circles</a>
                            </div>
                        </div>
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
        <div class="no-padding" id="social">
            <a href="http://www.edunet.org" target="_blank" class="button social-edunet social-links" data-account="edunet">
                <span><i class="fa fa-stack-exchange fa-2x"></i></span>
            </a>
            <a href="http://www.github.com" target="_blank" class="button social-github social-links" data-account="github">
                <span><i class="fa fa-github fa-2x"></i></span>
            </a>
            <a href="http://plus.google.com" target="_blank" class="button social-googleplus social-links" data-account="google">
                <span><i class="fa fa-google-plus fa-2x"></i></span>
            </a>
            <a href="http://www.facebook.com" target="_blank" class="button social-facebook social-links" data-account="facebook">
                <span><i class="fa fa-facebook fa-2x"></i></span>
            </a>
            <a href="http://www.linkedin.com" target="_blank" class="button social-linkedin social-links" data-account="linkedin">
                <span><i class="fa fa-linkedin fa-2x"></i></span>
            </a>
            <a href="http://www.twitter.com" target="_blank" class="button social-twitter social-links" data-account="twitter">
                <span><i class="fa fa-twitter fa-2x"></i></span>
            </a>
            <a href="http://www.youtube.com" target="_blank" class="button social-youtube social-links" data-account="youtube">
                <span><i class="fa fa-youtube fa-2x"></i></span>
            </a>
            <a href="http://www.stackoverflow.com" target="_blank" class="button social-stackoverflow social-links" data-account="stackoverflow">
                <span><i class="fa fa-stack-overflow fa-2x"></i></span>
            </a>
            <a href="http://www.instagram.com" target="_blank" class="button social-instagram social-links" data-account="instagram">
                <span><i class="fa fa-instagram fa-2x"></i></span>
            </a>
        </div>
    </main>
    <?php $accounts = [
        "edunet"=>"AnimeshSinha@edunet.com",
        "facebook"=>"AnimeshSinha.1309@gmail.com",
        "github"=>"@AnimeshSinha1309",
        "twitter"=>"@AnimeshSinha13",
        "google"=>"AnimeshSinha1309@gmail.com",
        "linkedin"=>"AnimeshSinha1309@gmail.com",
        "instagram"=>"AnimeshSinha1309@gmail.com",
        "stackoverflow"=>"AnimeshSinha1309@gmail.com",
        "youtube"=>"AnimeshSinha",
    ] ?>
    <script> initialize(<?php echo(json_encode($accounts)); ?>); </script>
<?php render("footer_foundation.php") ?>