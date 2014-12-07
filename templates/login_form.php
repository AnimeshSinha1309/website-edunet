<!DOCTYPE html>
<head>
  <title> Log in </title>
  <link href="../foundation/css/foundation.css" rel="stylesheet" type="text/css"/>
  <link href="../foundation/css/normalize.css" rel="stylesheet" type="text/css"/>
  <link href="../stylesheets/login.css" rel="stylesheet" type="text/css"/>
  <link href="../foundation/icons/foundation-icons/foundation-icons.css" rel="stylesheet" type="text/css"/>
  <link href="../images/favicon.ico" rel="icon"/>
  <script src="../foundation/js/foundation.min.js" type="text/javascript" language="javascript"></script>
</head>
<body class="lightgrey-body">
  <div class="center row">
    <div class="section-container tabs" data-section="tabs">
      <section>
        <div class="content" data-section-content>
          <div class="row">
            <div class="large-12 columns">
              <div class="signin-panel">
                <p class="welcome">Sign in to Edunet</p>
                <form action="../public/login.php" method="post"/>
                  <div class="row collapse">
                    <label for="login-email" class="hide">Username</label>
                    <div class="small-2 columns">
                      <span class="prefix"><i class="fi-mail"></i></span>
                    </div>
                    <div class="small-10  columns">
                      <input type="email" placeholder="Email" autofocus spellcheck="false" autocomplete="email" name="email" id="login-email"/>
                    </div>
                  </div>
                  <div class="row collapse">
                    <label for="login-password" class="hide">Password</label>
                    <div class="small-2 columns ">
                      <span class="prefix"><i class="fi-lock"></i></span>
                    </div>
                    <div class="small-10 columns">
                      <input type="password" placeholder="Password" name="password" id="login-password"/>
                    </div>
                  </div>
                  <?php if(isset($error)){ ?>
	                  <div class="alert alert-box">
	                    <?php if(isset($error))echo($error); ?>
 	                 </div>
                  <?php } ?>
                  <input type="submit" class="button center" id="sign-in-button" value="Sign in"/><br/>
                </form>
              </div>
              <div class="large-10 small-12 large-offset-1 columns">
                <a href="#" class="button alert center" id="sign-up-button">Not a part of Edunet? Sign Up Here.</a>
                <a href="#" class="button success center" id="tour-go-button">See what Edunet is all about. Take the tour.</a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  <div>
</body>
</html>