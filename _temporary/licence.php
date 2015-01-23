<!DOCTYPE html>
<html>
  <head>
    <?php require("../includes/config.php"); ?>
    <link href="../../../dependencies/foundation/css/foundation.min.css" rel="stylesheet" type="text/css"/>
    <link href="../assets/css/styles.css" rel="stylesheet" type="text/css"/>
    <link href="/images/favicon.ico" rel="icon"/>
    <?php if (isset($title)): ?><title>Stock Finance: <?= htmlspecialchars($title) ?></title>
    <?php else: ?><title>Stock Finance</title><?php endif ?>
  	<script src="/dependencies/jquery/jquery-2.1.3.min.js" type="text/javascript"></script>
  	<script src="/dependencies/foundation/js/foundation.min.js" type="text/javascript"></script>
  	<script> $(document).ready(function(e) { $(document).foundation(); }); </script>
	<script src="../assets/js/scripts.js" type="text/javascript"></script>
  </head>
  <body>
    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name"><h1><a href="../public/">Licence</a></h1></li>
      </ul>
      <section class="top-bar-section">
        <ul class="right">
          <li><a href="/">Edunet</a></li>
        </ul>
      </section>
    </nav>
	<div style="margin:150px;">
      <center>
        <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-sa/4.0/88x31.png" /></a><br /><br />
        <span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">Edunet Website</span> by <span xmlns:cc="http://creativecommons.org/ns#" property="cc:attributionName">Animesh Sinha</span> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International License</a>.
      </center>
    </div>
  </body>
</html>