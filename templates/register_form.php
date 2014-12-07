<!DOCTYPE html>
<head>
  <title> Register </title>
  <link href="../foundation/css/foundation.css" rel="stylesheet" type="text/css"/>
  <link href="../stylesheets/register.css" rel="stylesheet" type="text/css"/>
  <link href="../foundation/icons/foundation-icons/foundation-icons.css" rel="stylesheet" type="text/css"/>
  <link href="../bootstrap/vendor/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
  <link href="../images/favicon.ico" rel="icon"/>
  <script src="../foundation/js/vendor/modernizr.js"></script>
  <script src="../javascript/function.js" type="text/javascript"></script>
  <script src="../foundation/js/vendor/jquery.js" type="text/javascript"></script>
  <script src="../foundation/js/vendor/fastclick.js"></script>
  <script src="../foundation/js/foundation.min.js" type="text/javascript"></script>
  <script> $(document).ready(function(e) { $(document).foundation(); }); </script>
</head>
<body class="lightgrey-body">
  <section class="large-5 large-offset-1 hide-for-small-down columns">
    <!-- Advertisement of the website here, with a link to the tour -->
    <div class="text-center">
      <h2>Sign up for Edunet</h2>
    </div>
	<div>
      <h2 class="text-center"><small>What and Why is Edunet</small></h2>
    </div>
  </section>
  <section class="large-6 small-12 columns">
    <!-- Signup Form -->
    <div class="signup-panel large-8 small-12">
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
            <label for="form-fname" class="hide">Details</label>
            <div class="small-12 columns"><a href="#" class="button secondary" data-reveal-id="modal-details">Add Details about yourself</a></div>
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
       	  <div class="small-2 large-2 columns"><span class="prefix"><i class="fa fa-youtube-play"></i></span></div>
          <div class="small-9 large-9 columns"><input type="url" name="youtube" autofocus placeholder="Embed code of your Youtube Video."/></div>
          <div class="small-1 large-1 columns"><span data-tooltip aria-haspopup="true" class="has-tip postfix" title="Right clik on the video and choose the view embed code option. Copy and paste the code."><i class="fa fa-info-circle"></i></span></div>
          <div class="small-12"><textarea cols="50" rows="5" maxlength="512" placeholder="Enter a short description of you, in less than 512 letters."></textarea></div>
        </div>
        <div class="large-6 small-12">
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