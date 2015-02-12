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
    <script src="/dependencies/jquery/jquery-2.1.3.min.js" type="text/javascript"></script>
    <script src="/dependencies/foundation/js/foundation.min.js" type="text/javascript"></script>
    <script src="/javascript/elements.js" type="text/javascript"></script>
    <script> $(document).ready(function() { $(document).foundation(); }); </script>
    <script> radioButton(); </script>
    <?php if(isset($repopulate)): ?><script> repopulate(<?php echo(json_encode($repopulate)); ?>); </script><?php endif ?>
</head>
<body>
<div class="row">
    <!-- Sign up Form -->
    <div class="text-center" style="margin: 20px 10px 25px;">
        <h2>Register yourself on Edunet</h2>
    </div>
    <div class="form">
        <?php if(isset($apology)){ ?>
            <div class="alert alert-box">
                <?php if(isset($apology))echo($apology); ?>
            </div>
        <?php } ?>
        <form action="../public/register.php" method="post">
            <div class="columns large-5 large-offset-1 small-12">
                <div class="row collapse">
                    <label for="form-fname" class="hide">Your First Name</label>
                    <div class="small-2 columns"><span class="prefix"><i class="fi-torso"></i></span></div>
                    <div class="small-10 columns"><input type="text" placeholder="First Name" name="fname" autofocus autocomplete="name" id="form-fname"></div>
                </div>
                <div class="row collapse">
                    <label for="form-lname" class="hide">Your Last Name</label>
                    <div class="small-2 columns"><span class="prefix"><i class="fi-torso"></i></span></div>
                    <div class="small-10 columns"><input type="text" placeholder="Last Name" name="lname" autocomplete="name" id="form-lname"></div>
                </div>
                <div class="row collapse">
                    <label for="form-username" class="hide">Select a username for Edunet</label>
                    <div class="small-2 columns"><span class="prefix"><i class="fa fa-user"></i></span></div>
                    <div class="small-10 columns"><input id="form-username" type="text" placeholder="Your Edunet Username" name="username" autocomplete="off"></div>
                </div>
                <div class="row collapse">
                    <label for="form-password" class="hide">Type in your password</label>
                    <div class="small-2 columns"><span class="prefix"><i class="fi-lock"></i></span></div>
                    <div class="small-10 columns"><input id="form-password" type="password" placeholder="Type Password" name="password"></div>
                </div>
                <div class="row collapse">
                    <label for="form-confirm" class="hide">Confirm your Password</label>
                    <div class="small-2 columns"><span class="prefix"><i class="fi-lock"></i></span></div>
                    <div class="small-10 columns"><input id="form-confirm" type="password" placeholder="Confirm Password" name="confirm"></div>
                </div>
                <div class="row collapse">
                    <label for="form-google" class="hide">Google Account</label>
                    <div class="small-2 columns"><span class="prefix"><i class="fa fa-google"></i></span></div>
                    <div class="small-10 columns"><input type="email" id="form-google" placeholder="Google Account" name="google-acc"></div>
                </div>
            </div>
            <div class="columns large-5 large-offset-0 small-12">
                <label style="line-height: 25px">Account Access Type</label>
                <ul class="el-radio" id="form-access" data-name="access" data-verify="php">
                    <li><label class="success active"><input value="General" selected onchange="$('#verification').addClass('hide')"/><span>General</span></label></li>
                    <li><label class="success"><input value="Student" onchange="$('#verification').removeClass('hide')"/><span>Student</span></label></li>
                    <li><label class="success"><input value="Coach" onchange="$('#verification').removeClass('hide')"/><span>Coach</span></label></li>
                    <li><label class="success"><input value="Premium" onchange="$('#verification').removeClass('hide')"/><span>Premium</span></label></li>
                    <li><label class="success"><input value="Special" onchange="$('#verification').removeClass('hide')"/><span>Special</span></label></li>
                    <li><label class="success"><input value="Developer" onchange="$('#verification').removeClass('hide')"/><span>Developer</span></label></li>
                </ul>
                <div class="row collapse hide" id="verification" style="margin-top: 30px;">
                    <div class="small-2 columns"><span class="prefix"><i class="fa fa-globe"></i></span></div>
                    <div class="small-10 columns"><input type="text" id="form-verify" placeholder="Verification Code" name="verify"></div>
                </div>
                <div style="margin-top: 50px;">
                    <input type="submit" class="button" value="Submit form and Sign up"/>
                </div>
                <strong>Already a member? <a href="/public/login.php">Log in</a>.</strong>
            </div>
            <div class="large-1"></div>
        </form>
    </div>
</div>
</body>
</html>