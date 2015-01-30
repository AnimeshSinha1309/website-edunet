<!DOCTYPE html>
<html>
<head>
    <title> Register </title>
    <link href="/dependencies/foundation/css/foundation.css" rel="stylesheet" type="text/css"/>
    <link href="/stylesheets/elements.css" rel="stylesheet" type="text/css"/>
    <link href="/stylesheets/register.css" rel="stylesheet" type="text/css"/>
    <link href="/dependencies/foundation/icons/foundation-icons/foundation-icons.css" rel="stylesheet" type="text/css"/>
    <link href="/dependencies/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
    <link href="/images/favicon.ico" rel="icon"/>
    <script src="/dependencies/foundation/js/vendor/modernizr.js"></script>
    <script src="/dependencies/foundation/js/vendor/fastclick.js"></script>
    <script src="/dependencies/jquery/jquery-2.1.3.min.js" type="text/javascript"></script>
    <script src="/dependencies/foundation/js/foundation.min.js" type="text/javascript"></script>
    <script src="/javascript/elements.js" type="text/javascript"></script>
    <script> $(document).ready(function() { $(document).foundation(); }); </script>
    <script> radioButton(); </script>
    <script> uploadButton('#profile-picture-button', '#profile-picture-fileInput', function() {  alert('@debug:error'); }); </script>
    <?php if(isset($repopulate)): ?><script> repopulate(<?php echo(json_encode($repopulate)); ?>); </script><?php endif ?>
</head>
<body>
<section class="large-5 large-offset-1 hide-for-small-down columns">
    <!-- Advertisement of the website here, with a link to the tour -->
    <div class="text-center">
        <h2>Sign up for Edunet</h2>
        <hr class="divider" style="border-color:#999;"/>
    </div>
    <div class="row" style="margin-top:20px;">
        <div class="small-8 columns">
            <img src="/images/register/site-view-pic-2.PNG" alt="Screen" class="th"/>
        </div>
        <div class="small-4 columns">
            <div class="row">
                <img src="/images/register/site-view-pic-1.PNG" alt="Screen" class="th"/>
            </div>
            <div class="row">
                <img src="/images/register/site-view-pic-3.PNG" alt="Screen" style="margin-top:11px;" class="th"/>
            </div>
        </div>
    </div>
    <hr class="divider" style="border-color:#999;"/>
    <div>
        <h3>What is Edunet?</h3>
        <p style="margin-bottom:5px;">Edunet is a network for schools, colleges and universities. It is a web application that ties in all of the components of a school network, and makes lives of students and teachers much easier. It is so user friendly, you can do just about anything here without being computer savvy. Here are some key features of the website.</p>
        <ul style="margin-left:20px;">
            <li>Web framework for all schools that need a great website.</li>
            <li>Complete courseware from the best of teachers in the city.</li>
            <li>Result maker, don't waste your time with percentages.</li>
            <li>Event registration, advertise and enroll, right here.</li>
            <li>News Update. Never miss a thing from you school with our alerts.</li>
            <li>We value and publish your code, projects, essay. So upload.</li>
        </ul>
    </div>
    <hr class="divider" style="border-color:#999;"/>
    <div>
        <h3>Feel Edunet inside out?</h3>
        <p>We enlisted a bunch of features right now, but would you like to know what exactly they mean, and what kind of screens would you be treated to when you use this website. Just view this short video and you would know why we are so confident about our website and the great experience you would have using it.</p>
        <iframe width="477" height="280" src="//www.youtube.com/embed/tRg_eDfQ8fk" frameborder="0" allowfullscreen></iframe>
        <p style="margin-top:20px;">Videos are great, but if you would like to look at each page in full screen, then take our joyride. This express tour will take you through all the important pages, and let you play around a bit. If you want more then sign up, it is super easy and all free.</p>
        <a href="#" class="button success">Take the Joyride</a>
    </div>
    <hr class="divider" style="border-color:#999;"/>
    <div>
        <h3>Take a deeper look.</h3>
        <p>Still not satisfied. Want to dive a bit deeper and know about every single feature, every small bit about us. Would you like to know how we rate your projects and essays, user experience on different devices, about our future plans or mobile apps, or something of that sort. Then view this video to explore every bit of the website.</p>
        <a href="#" class="button">View the complete exploration video.</a>
    </div>
</section>
<section class="large-6 small-12 columns">
    <!-- Sign up Form -->
    <div class="signUp-panel large-8 small-12">
        <?php if(isset($apology)){ ?>
            <div class="alert alert-box">
                <?php if(isset($apology))echo($apology); ?>
            </div>
        <?php } ?>
        <form action="../public/register.php" method="post">
            <div id="form-personal">
                <strong>Personal Details</strong>
                <p class="text-justify">Details about you go to your profile and also help us customize content for you. It is also used to autofill your forms.</p>
                <div class="row collapse">
                    <label for="form-fname" class="hide"></label>
                    <div class="small-2 columns"><span class="prefix"><i class="fi-torso"></i></span></div>
                    <div class="small-10 columns"><input type="text" placeholder="First Name" name="fname" autofocus autocomplete="name" id="form-fname"></div>
                </div>
                <div class="row collapse">
                    <label for="form-lname" class="hide"></label>
                    <div class="small-2 columns"><span class="prefix"><i class="fi-torso"></i></span></div>
                    <div class="small-10 columns"><input type="text" placeholder="Last Name" name="lname" autocomplete="name" id="form-lname"></div>
                </div>
                <div class="row collapse">
                    <label for="form-fname" class="hide">Introduction</label>
                    <div class="small-12 columns">
                        <a href="#" class="button secondary" data-reveal-id="modal-intro">Introduce yourself on Edunet</a>
                    </div>
                </div>
            </div>
            <hr>
            <div id="form-account">
                <strong>Your Account</strong>
                <p class="text-justify">These are the setting are crucial to your account. They can be changed later if need be.</p>
                <div class="row collapse">
                    <label for="form-school" class="hide">School</label>
                    <div class="small-12 columns"><a href="#" class="button" data-reveal-id="modal-school">Select School or University</a></div>
                </div>
                <div class="row collapse">
                    <label for="form-username" class="hide"></label>
                    <div class="small-2 columns"><span class="prefix"><i class="fa fa-user"></i></span></div>
                    <div class="small-10 columns"><input id="form-username" type="text" placeholder="Your Edunet Username" name="username" autocomplete="off"></div>
                </div>
                <div class="row collapse">
                    <label for="form-password" class="hide"></label>
                    <div class="small-2 columns"><span class="prefix"><i class="fi-lock"></i></span></div>
                    <div class="small-10 columns"><input id="form-password" type="password" placeholder="Type Password" name="password"></div>
                </div>
                <div class="row collapse">
                    <label for="form-cpassword" class="hide"></label>
                    <div class="small-2 columns"><span class="prefix"><i class="fi-lock"></i></span></div>
                    <div class="small-10 columns"><input id="form-cpassword" type="password" placeholder="Confirm Password" name="cpassword"></div>
                </div>
                <div class="row collapse">
                    <label for="form-birth-date" class="hide"></label>
                    <div class="small-2 columns"><span class="prefix"><i class="fi-mobile"></i></span></div>
                    <div class="small-10 columns"><input id="form-mobile" type="tel" name="mobile" maxlength="20" placeholder="Mobile Number"/></div>
                </div>
                <label>Account Access Type</label>
                <ul class="el-radio" id="form-access">
                    <li><label><input type="radio" name="access" value="Student" /><span>Student</span></label></li>
                    <li><label><input type="radio" name="access" value="Coach" /><span>Coach</span></label></li>
                    <li><label><input type="radio" name="access" value="General" /><span>General</span></label></li>
                    <li><label><input type="radio" name="access" value="Premium" /><span>Premium</span></label></li>
                    <li><label><input type="radio" name="access" value="Special" /><span>Special</span></label></li>
                    <li><label><input type="radio" name="access" value="Developer" /><span>Developer</span></label></li>
                </ul>
            </div>
            <hr>
            <div id="form-accounts">
                <strong>Online Accounts</strong>
                <p class="text-justify">Please provide all of your online accounts so that we can provide you a better experience. If you don't have some of them, go and sign up. They are all great.</p>
                <div class="row collapse">
                    <div class="small-2 columns"><span class="prefix"><i class="fa fa-google"></i></span></div>
                    <div class="small-10 columns"><input type="email" id="form-google-acc" placeholder="Google Account" name="google-acc"></div>
                </div>
                <div class="row collapse">
                    <div class="small-2 columns"><span class="prefix"><i class="fa fa-facebook"></i></span></div>
                    <div class="small-10 columns"><input type="email" id="form-facebook-acc" placeholder="Facebook Account" name="facebook-acc"></div>
                </div>
                <div class="row collapse">
                    <div class="small-2 columns"><span class="prefix"><i class="fa fa-github"></i></span></div>
                    <div class="small-10 columns"><input type="email" id="form-github-acc" placeholder="GitHub Account" name="github-acc"></div>
                </div>
                <div class="row collapse">
                    <div class="small-2 columns"><span class="prefix"><i class="fa fa-stack-overflow"></i></span></div>
                    <div class="small-10 columns"><input type="email" id="form-stackoverflow-acc" placeholder="StackOverflow Account" name="stackoverflow-acc"></div>
                </div>
                <div class="row collapse">
                    <div class="small-2 columns"><span class="prefix"><i class="fa fa-windows"></i></span></div>
                    <div class="small-10 columns"><input type="email" id="form-microsoft-acc" placeholder="Microsoft Account" name="microsoft-acc"></div>
                </div>
            </div>
            <hr>
            <div>
                <input type="submit" class="button" value="Submit form and Sign up"/>
            </div>
            <div>
                <div id="modal-intro" class="reveal-modal" data-reveal>
                    <h2>Introduce Yourself</h2>
                    <p class="lead">Introduce yourself via a video message and a textual description and let preople know exactly who you are.</p>
                    <p>Before you write up your introduction, go ahead and make a short video introducing yourself, and upload in on youtube. It would be really fun if all our profiles had videos rather than plain old texts.</p><br/>
                    <div class="row collapse large-6 small-12 columns">
                        <label class="hide" for="form-youtube">Youtube introduction video embed code</label>
                        <div class="small-2 large-2 columns">
                            <span class="prefix">
                                <i class="fa fa-youtube-play"></i>
                            </span>
                        </div>
                        <div class="small-9 large-9 columns">
                            <input type="url" name="youtube" autofocus placeholder="Embed code of your Youtube Video." id="form-youtube"/>
                        </div>
                        <div class="small-1 large-1 columns">
                            <span data-tooltip aria-haspopup="true" class="has-tip postfix" title="Right clik on the video and choose the view embed code option. Copy and paste the code.">
                                <i class="fa fa-info-circle"></i>
                            </span>
                        </div>
                        <label class="hide" for="form-description">Description</label>
                        <div class="small-12">
                            <textarea cols="50" rows="5" maxlength="512" placeholder="Enter a short description of you, in less than 512 letters." name="description" id="form-description"></textarea>
                        </div>
                        <label for="form-interest-tags"><strong>Enter your inerests separated by semicolons.</strong></label>
                        <div class="small-12 columns">
                            <input type="text" name="interest-tags" autofocus placeholder="eg. Physics; JavaScript; Football; Relativity" id="form-interest-tags"/>
                        </div>
                        <label class="hide" for="form-interest-primary">Interests</label>
                        <div><strong>Select your primary field of interest.</strong> If your have not thought of it, just scroll to the bottom and select fields like education, sports or the like.</div>
                        <div class="small-12 columns">
                            <select name="interest-primary" id="form-interest-primary">
                                <option value="">+ [Select from this list]</option>
                                <option value="Physics">Physics</option>
                                <option value="Engineering">Engineering</option>
                                <option value="Computers">Computers</option>
                                <option value="Mathematics">Mathematics</option>
                            </select>
                        </div>
                    </div>
                    <div class="row collapse large-6 small-12 columns">
                        <h4>Upload your photograph</h4>
                        <p class="text-justify">
                            Please upload a clear one person photograph of you, not somebody or something else. We will use it on your profile only if you permit us to, but this will be your default photograph in form autofills. View our <a target="_blank" href="#">requirements for photographs</a> before uploading yours.
                        </p>
                        <div class="large-6 small-12 columns">
                            <img src="../images/avatar-blank.png" id="profile-picture-display" alt="Your Photograph" height="175" width="175" class="th"/>
                        </div>
                        <div class="large-6 small-12 columns">
                            <input type="file" name="profile-pic" id="profile-picture-fileInput" multiple class="hide" accept="image/*">
                            <button id="profile-picture-button" class="button secondary">Upload your Image</button>
                        </div>
                    </div>
                    <a class="close-reveal-modal">&#215;</a>
                </div>
                <div id="modal-school" class="reveal-modal" data-reveal>
                    <h2>No Need Right Now</h2>
                    <p class="lead">We will get all the information we need here from your schools for now, and ask you for more later.</p>
                    <p>We are limited to only a few schools right now, and we are still in initial phases of our development, so for now we are not asking for a lot of details. If your school is registered with us, they will give us all the data we need. If we need to ask you anything more, we will do that later. If your school is not registered, do not worry. We will get all the information as we need it. If you can get your school to register with us, then that's great.
                        <br/>If you are a programmer, you can help us by forking our <a href="http://www.github.com/AnimeshSinha1309/Website-Edunet">GitHub repository</a> and sending us a pull request.</p>
                    <a class="close-reveal-modal">&#215;</a>
                </div>
            </div>
        </form>
        <strong>Already a member? <a href="/public/login.php">Log in</a>.</strong>
    </div>
</section>
</body>
</html>