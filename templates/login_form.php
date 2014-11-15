<!DOCTYPE html>
<head>
	<title> Log in </title>
	<link <?php echo("href=".STYLESHEETS."/styles.css"); ?> rel="stylesheet" type="text/css">
	<link <?php echo("href=".STYLESHEETS."/login.css"); ?> rel="stylesheet" type="text/css">
</head>
<body>
	<div>
		<br/>
        <table align="center"> <tr>
            <td> <img <?php echo("src=".IMAGES."/logo.png"); ?> alt="Edunet" height="150"/> </td>
            <td  width="30"> </td>
            <td>
				<table>
	               	<tr> <td class="text header_title"> Welcome to Edunet </td> </tr>
	                <tr> <td class="text header_subtitle"> The custom network for educational institutions </td> </tr>
				</table>
            </td>
		</tr> </table> <br/>
    </div>
    <div align="center" id="login_formbox">
     	<br/> <br/>
        <img <?php echo("src=".IMAGES."/avatar_blank.png"); ?> alt="Edunet" height="100"/> <br/> <br/>
        <?php if (isset($apology)): ?>
            <p class="login_text header_apology"> <?= htmlspecialchars($apology) ?> </p>
        <?php endif ?>
        <form method="post" action="login.php">
			<input align="middle" class="form_text" name="Email" type="email" placeholder="Email" spellcheck="false">
			<input align="middle" class="form_text" name="Password" type="password" placeholder="Password" spellcheck="false">
            <br/>
			<input align="middle" type="submit" class="form_submit" value="Sign in">
        </form>
    </div>
    <div class="text" align="center">
    	<a href="register.php"> Register for an Account </a>
    </div>
</body>
</html>
