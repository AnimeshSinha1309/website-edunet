<!DOCTYPE html>
<head>
  <title> Register </title>
  <link href="../libraries/foundation/css/foundation.css" rel="stylesheet" type="text/css"/>
  <link href="../stylesheets/register.css" rel="stylesheet" type="text/css"/>
  <link href="../libraries/foundation/icons/foundation-icons/foundation-icons.css" rel="stylesheet" type="text/css"/>
  <link href="../libraries/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
  <link href="../images/favicon.ico" rel="icon"/>
  <script src="../libraries/foundation/js/vendor/modernizr.js"></script>
  <script src="../javascript/elements.js" type="text/javascript"></script>
  <script src="../libraries/foundation/js/vendor/jquery.js" type="text/javascript"></script>
  <script src="../libraries/foundation/js/vendor/fastclick.js"></script>
  <script src="../libraries/foundation/js/foundation.min.js" type="text/javascript"></script>
  <script> $(document).ready(function(e) { $(document).foundation(); }); </script>
  <script> $(document).ready(function(e){uploadbutton();}); </script>
</head>
<body class="lightgrey-body">
  <section class="large-5 large-offset-1 hide-for-small-down columns">
    <!-- Advertisement of the website here, with a link to the tour -->
    <div class="text-center">
      <h2>Sign up for Edunet</h2>
      <hr class="divider" style="border-color:#999;"/>
    </div>
    <div class="row" style="margin-top:20px;">
      <div class="small-8 columns">
        <img src="../images/register/siteview-pic-2.png" alt="Screen" class="th"/>
      </div>
      <div class="small-4 columns">
        <div class="row">
          <img src="../images/register/siteview-pic-1.png" alt="Screen" class="th"/>
        </div>
        <div class="row">
          <img src="../images/register/siteview-pic-3.png" alt="Screen" style="margin-top:11px;" class="th"/>
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
        <li>Event registeration, advertise and enroll, right here.</li>
        <li>News Update. Never miss a thing from you school with our alerts.</li>
        <li>We value and publish your code, projects, essay. So upload.</li>
      </ul>
    </div>
    <hr class="divider" style="border-color:#999;"/>
    <div>
      <h3>Feel Edunet inside out?</h3>
      <p>We enlisted a bunch of features right now, but would you like to know what exactly they mean, and what kind of screens would you be treated to when you use this website. Just view this short video and you would know why we are so confident about our website and the great experience you would have using it.</p>
      <iframe width="477" height="280" src="//www.youtube.com/embed/tRg_eDfQ8fk" frameborder="0" allowfullscreen></iframe>
      <p style="margin-top:20px;">Videos are great, but if you would like to look at each page in full screen, then take outr joyride. This express tour will take you through all the important pages, and let you play around a bit. If you want more then sign up, it is super easy and all free.</p>
      <a href="../advertise/joyride/joyride.php?pos=start" class="button success">Take the Joyride</a>
    </div>
    <hr class="divider" style="border-color:#999;"/>
    <div>
      <h3>Take a deeper look.</h3>
      <p>Still not satisfied. Want to dive a bit deeper and know about every single feature, every small bit about us. Would you like to know how we rate your projects and essays, user experience on different devices, about our future plans or mobile apps, or something of that sort. Then view this video to explore every bit of the website.</p>
	  <a href="#" class="button">View the complete exploration video.</a>
    </div>
  </section>
  <section class="large-6 small-12 columns">
    <!-- Signup Form -->
    <div>
    <div class="signup-panel large-8 small-12">
      <?php if(isset($error)) echo("<div class=\"alert-box alert\">".$error."</div>"); ?>
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
            <div class="small-10 columns"><input type="text" placeholder="Last Name" name="lname" autocomplete="name" id="form-lname">
          </div>
          </div>
	      <div class="row collapse">
            <label for="form-fname" class="hide">Introduction</label>
            <div class="small-12 columns"><a href="#" class="button secondary" data-reveal-id="modal-intro">Introduce yourself on Edunet</a></div>
          </div>
        </div>
        <hr>
        <div id="form-account">
          <strong>Your Account</strong>
          <p class="text-justify">These are the setting are crucial to your account. They can be changed later if need be.</p>
	      <div class="row collapse">
            <label for="form-fname" class="hide">School</label>
            <div class="small-12 columns"><a href="#" class="button" data-reveal-id="modal-school">Select School or University</a></div>
          </div>
	      <div class="row collapse">
            <label for="form-fname" class="hide"></label>
            <div class="small-2 columns"><span class="prefix"><i class="fa fa-user"></i></span></div>
            <div class="small-10 columns"><input type="text" placeholder="Your Edunet Username" name="username" autocomplete="off" id="form-password"></div>
          </div>
	      <div class="row collapse">
            <label for="form-fname" class="hide"></label>
            <div class="small-2 columns"><span class="prefix"><i class="fi-lock"></i></span></div>
            <div class="small-10 columns"><input type="password" placeholder="Type Password" name="password" autocomplete="name" id="form-password"></div>
          </div>
	      <div class="row collapse">
            <label for="form-fname" class="hide"></label>
            <div class="small-2 columns"><span class="prefix"><i class="fi-lock"></i></span></div>
            <div class="small-10 columns"><input type="password" placeholder="Confirm Password" name="confirm" id="form-confirm"></div>
          </div>
          <div class="row collapse">
            <label for="form-birth-date" class="hide"></label>
            <div class="small-2 columns"><span class="prefix"><i class="fi-mobile"></i></span></div>
            <div class="small-10 columns"><input type="tel" name="mobile" maxlength="20" placeholder="Mobile Number"/></div>
          </div>
          <ul class="button-group">
          <label>Account Access Type</label>
            <li><label class="button access-radio" id="access-radio-1"><input type="radio" name="options" id="option1" class="button-radio hide" onChange="radiobutton('access-radio-1');">Student</label></li>
            <li><label class="button access-radio" id="access-radio-2"><input type="radio" name="options" id="option2" class="button-radio hide" onChange="radiobutton('access-radio-2');">Coach</label></li>
            <li><label class="button access-radio" id="access-radio-3"><input type="radio" name="options" id="option3" class="button-radio hide" onChange="radiobutton('access-radio-3');">General</label></li>
            <li><label class="button access-radio" id="access-radio-4"><input type="radio" name="options" id="option4" class="button-radio hide" onChange="radiobutton('access-radio-4');">Premium</label></li>
            <li><label class="button access-radio" id="access-radio-5"><input type="radio" name="options" id="option5" class="button-radio hide" onChange="radiobutton('access-radio-5');">Special</label></li>
            <li><label class="button access-radio text-center" id="access-radio-6"><input type="radio" name="options" id="option6" class="button-radio hide" onChange="radiobutton('access-radio-6');">Developer</label></li>
            <li><label class="button access-radio" id="access-radio-7"><input type="radio" name="options" id="option6" class="button-radio hide" onChange="radiobutton('access-radio-7');">Coachster</label></li>
            <li><label class="button access-radio" id="access-radio-8"><input type="radio" name="options" id="option6" class="button-radio hide" onChange="radiobutton('access-radio-8');">Achiever</label></li>
            <li><label class="button access-radio" id="access-radio-9"><input type="radio" name="options" id="option6" class="button-radio hide" onChange="radiobutton('access-radio-9');">Ultimate</label></li>
          </ul>
        </div>
        <hr>
        <div id="form-accounts">
          <strong>Online Accounts</strong>
          <p class="text-justify">Please provide all of your online accounts so that we can provide you a better experience. If you don't have some of them, go and sign up. They are all great.</p>
          <div class="row collapse">
            <div class="small-2 columns"><span class="prefix"><i class="fa fa-google"></i></span></div>
            <div class="small-10 columns"><input type="email" placeholder="Google Account">
          </div>
          <div class="row collapse">
            <div class="small-2 columns"><span class="prefix"><i class="fa fa-facebook"></i></span></div>
            <div class="small-10 columns"><input type="email" placeholder="Facebook Account">
          </div>
          <div class="row collapse">
            <div class="small-2 columns"><span class="prefix"><i class="fa fa-github"></i></span></div>
            <div class="small-10 columns"><input type="email" placeholder="GitHub Account">
          </div>
          <div class="row collapse">
            <div class="small-2 columns"><span class="prefix"><i class="fa fa-stack-overflow"></i></span></div>
            <div class="small-10 columns"><input type="email" placeholder="StackOverflow Account">
          </div>
          <div class="row collapse">
            <div class="small-2 columns"><span class="prefix"><i class="fa fa-windows"></i></span></div>
            <div class="small-10 columns"><input type="email" placeholder="Microsoft Account">
          </div>
        </div>
        <hr>
        <div>
          <input type="submit" class="button" value="Submit form and Sign up"/>
        </div>
      </form>
    </div>
    <div>
      <div id="modal-details" class="reveal-modal" data-reveal>
        <h2>Awesome. I have it.</h2>
        <p class="lead">Your couch.  It is mine.</p>
        <p>I'm a cool paragraph that lives inside of an even cooler modal. Wins!</p>
        <a class="close-reveal-modal">&#215;</a>
      </div>
      <div id="modal-intro" class="reveal-modal" data-reveal>
        <h2>Introduce Youself</h2>
        <p class="lead">Introduce yourself via a video message and a textual description and let preople know exactly who you are.</p>
        <p>Before you write up your introduction, go ahead and make a short video introducing yourself, and upload in on youtube. It would be really fun if all our profiles had videos rather than plain old texts.</p><br/>
        <div class="row collapse large-6 small-12 columns">
          <label class="hide" for="form-youtube">Youtube introduction video embed code</label>
       	  <div class="small-2 large-2 columns"><span class="prefix"><i class="fa fa-youtube-play"></i></span></div>
          <div class="small-9 large-9 columns"><input type="url" name="youtube" autofocus placeholder="Embed code of your Youtube Video." id="form-youtube"/></div>
          <div class="small-1 large-1 columns"><span data-tooltip aria-haspopup="true" class="has-tip postfix" title="Right clik on the video and choose the view embed code option. Copy and paste the code."><i class="fa fa-info-circle"></i></span></div>
         <label class="hide" for="form-description">Description</label>
         <div class="small-12"><textarea cols="50" rows="5" maxlength="512" placeholder="Enter a short description of you, in less than 512 letters." name="description" id="form-description"></textarea></div>
          <label for="form-interests"><strong>Enter your inerests separated by semicolons.</strong></label>
          <div class="small-12 columns"><input type="text" name="interests" autofocus placeholder="eg. Physics; JavaScript; Football; Relativity" id="form-youtube"/></div>
          <label class="hide" for="form-interests">Interests</label>
          <div><strong>Select your primary field of interest.</strong> If your have not thought of it, just scroll to the bottom and select fields like education, sports or the like.</div>
          <div class="small-12 columns">
            <select>
              <option>Physics</option>
              <option>Physics - Astrophysics</option>
              <option>Engineering</option>
              <option>Engineering - Electrical</option>
              <option>Engineering - Mechanical</option>
              <option>Computers</option>
              <option>Computers - Web Frontend</option>
              <option>Computers - Web Backend</option>
              <option>Computers - Mobile Devices</option>
              <option>Computers - Native Programs</option>
              <option><strong>Mathematics</strong></option>
              <option>Mathematics - Calculus</option>
              <option>Mathematics - Coordinate</option>
              <option>Mathematics - Algebra</option>
              <option>Mathematics - Number Theory</option>
            </select>
          </div>
        </div>
        <div class="row collapse large-6 small-12 columns">
          <h4>Upload your photograph</h4>
          <p class="text-justify">Please upload a clear one person photograph of you, not somebody or something else. We will use it on your profile only if you permit us to, but this will be your default photograph in form autofills. View our <a target="_blank" href="#">requirements for photographs</a> before uploading yours.</p>
          <div class="large-6 small-12 columns">
          	<img src="../images/avatar-blank.png" id="profile-picture-display" alt="Your Photo" height="175" width="175" class="th"/>
          </div>
          <div class="large-6 small-12 columns">
            <input type="file" id="fileElem" multiple="" name="profilepic" class="hide" onchange="handleFiles(this.files)">
			<button id="fileSelect" class="button secondary">Upload your Image</button>
          </div>
        </div>
        <a class="close-reveal-modal">&#215;</a>
      </div>
      <div id="modal-school" class="reveal-modal" data-reveal>
        <h2>Awesome. I have it.</h2>
        <p class="lead">Your couch.  It is mine.</p>
        <p>I'm a cool paragraph that lives inside of an even cooler modal. Wins!</p>
        <a class="close-reveal-modal">&#215;</a>
      </div>
    </div>
  </section>
</body>
</html>