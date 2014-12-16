<?php require_once("../includes/config.php"); render("header_foundation.php"); ?>
    <style>
	  body{background-color:#eeeeee;}
	  .heading{margin-top:50px;}
	  .apology{color:rgba(0, 0, 0, 0.5); margin-top:25px;}
	</style>
	<div class="text-center">
      <div class="heading">
        <h1> Site Error </h1>
      </div>
      <p class="large-4 large-offset-4 apology">
      	<strong>
          The site responded with an error code. <br/><br/>
          Please use the navigation panel on the top to navigate your way to the content you need.
        </strong>
      </p>
      <p class="apology">
        <strong>
          If you are a developer, please change this message to one that is specific to the scenario.
        </strong>
      </p>
	</div>
  </body>
</html>