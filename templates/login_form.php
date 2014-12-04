<!DOCTYPE html>
<head>
	<title> Log in </title>
	<link href="../foundation/css/foundation.css" rel="stylesheet" type="text/css"/>
    <link href="../foundation/css/normalize.css" rel="stylesheet" type="text/css"/>
    <link href="../images/favicon.ico" rel="icon"/>
    <script src="../foundation/js/foundation.min.js" type="text/javascript" language="javascript"></script>
    <style>
		.lightgrey-body{background-color:#ddd;}
		#login-formbox{padding:50px; margin-top:30px;}
		#login-avatar{margin:30px;}
	</style>
</head>
<body class="lightgrey-body">
    <div align="center" class="large-4 large-offset-4" id="login-formbox">
    	<h1>Sign in to Edunet</h1><br/>
        <form method="post" action="../public/login.php">
            <div class="alert-box alert" <?php echo("style=\"display:"); if(isset($error)) echo("block\""); else echo("none\""); ?>>Invalid Username and/or Password</div>
			<input align="middle" class="form_text" name="Email" type="email" placeholder="Email" spellcheck="false" autofocus>
			<input align="middle" class="form_text" name="Password" type="password" placeholder="Password" spellcheck="false">
            <br/>
			<input align="middle" type="submit" id="signin-button" class="button large" value="Sign in">
        </form>
    </div>
    <div class="text" align="center">
    	<a href="#"> Register for an Account </a>
    </div>
</body>
</html>
