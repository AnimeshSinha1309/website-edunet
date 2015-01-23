<!DOCTYPE html>
<head>
  <title> Log in </title>
  <link href="../dependencies/foundation/css/foundation.css" rel="stylesheet" type="text/css"/>
  <link href="../dependencies/foundation/css/normalize.css" rel="stylesheet" type="text/css"/>
  <link href="../stylesheets/login.css" rel="stylesheet" type="text/css"/>
  <link href="../dependencies/foundation/icons/foundation-icons/foundation-icons.css" rel="stylesheet" type="text/css"/>
  <link href="../images/favicon.ico" rel="icon"/>
  <script src="../dependencies/foundation/js/foundation.min.js" type="text/javascript" language="javascript"></script>
  <script src="https://apis.google.com/js/client:platform.js" async defer></script>
</head>
<body class="lightgrey-body">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
  <script src="https://apis.google.com/js/client:platform.js?onload=render" async defer></script>
  <script>
  function render() {
    gapi.signin.render('customBtn', {
      //'callback': 'signinCallback',
      'clientid': '841077041629.apps.googleusercontent.com',
      'cookiepolicy': 'single_host_origin',
      'requestvisibleactions': 'http://schema.org/AddAction',
      'scope': 'https://www.googleapis.com/auth/plus.login'
    });
  }
  </script>
  <style type="text/css">
    #customBtn {
      display: inline-block;
      background: #dd4b39;
      color: white;
      width: 320px;
      border-radius: 5px;
      white-space: nowrap;
	  border-radius:0px;
	  height:65px;
    }
    #customBtn:hover {
      background: #e74b37;
      cursor: hand;
    }
    span.icon {
      background: url('http://developers.google.com/+/images/branding/btn_red_32.png') transparent 5px 50% no-repeat;
      display: inline-block;
      vertical-align: middle;
      width: 65px;
      height: 65px;
      border-right: #bb3f30 1px solid;
    }
    span.buttonText {
      display: inline-block;
      vertical-align: middle;
      padding-left: 35px;
      padding-right: 35px;
      font-size: 20px;
      font-weight: bold;
      /* Use the Roboto font that is loaded in the <head> */
      font-family: 'Roboto',arial,sans-serif;
    }
  </style>

  <div class="row">
    <div class="section-container tabs" data-section="tabs">
      <section>
        <div class="content" data-section-content>
          <div class="row">
            <div class="large-12 columns">
              <div class="signin-panel" style="margin-top:100px;">
                <center>
                  <!-- In the callback, you would hide the gSignInWrapper element on a
                  successful sign in -->
                  <div id="gSignInWrapper">
                    <div id="customBtn" class="customGPlusSignIn">
                      <span class="icon"></span>
                      <span class="buttonText">Log in with Google</span>
                    </div>
                  </div>
                  <h1>
                    <span class="fi-social-apple"> 
                    <span class="fi-social-github"> 
                    <span class="fi-social-android"> 
                    <span class="fi-social-drive"> 
                    <span class="fi-social-blogger"> 
                    <span class="fi-social-linkedin"> 
                    <span class="fi-social-adobe"> 
                    <span class="fi-social-twitter"> 
                    <span class="fi-social-windows> 
                    <span class="fi-social-bing"> 
                    <span class="fi-social-amazon"> 
                    <span class="fi-social-google-plus"> 
                    <span class="fi-social-facebook"> 
                  </h1>
                </center>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>

</body>
</html>