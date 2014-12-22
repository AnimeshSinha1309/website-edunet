<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign in</title>
    <link href="../../../libraries/bootstrap/css/bootstrap.min.css" rel="stylesheet">  <!-- Bootstrap -->
    <link href="../../../libraries/bootstrap/themes/login.css" rel="stylesheet">
    <link href="../../../images/favicon.ico" rel="icon">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../../../libraries/bootstrap/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
      <form role="form" id="login-validate" action="../public/login.php" method="post">
        <h2 class="form-signin-heading">Sign in to St. Thomas</h2> <br/>
        <label for="login-validate-googleacc" class="sr-only">Google Account</label>
        <input type="email" id="login-validate-googleacc" name="username" class="form-control" placeholder="Google Account" autofocus>
        <label for="login-validate-password" class="sr-only">Password</label>
        <input type="password" id="login-validate-password" name="password" class="form-control" placeholder="Password">
        <div class="checkbox"><label><input type="checkbox" name="remember" value="remember">Remember me</label></div>
        <div class="checkbox"><label><input type="checkbox" name="nopass" value="nosignin">Login without password (unregistered)</label></div>
        <?php if(isset($error)) echo("<div class=\"alert alert-danger\">".$error."</div><br/>"); ?>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button> <br/>
        <small><a href="">Forgot username or password?</a></small> <br/>
        <small><a href="">Register as a new user.</a></small> <br/><br/>
        <strong>Don't have an account? <a href="">Sign up now.</a></strong>
      </form>
    </div>
  </body>
</html>