<?php render("header_foundation.php", array("stylesheet" => "postbook", "script" => "postbook", "navpos" => "postbook")); ?>
<div style="margin-top:30px; margin-bottom:25px; margin-left:100px; margin-right:100px;">
  <div class="large-4 columns">
	<div class="columns post">
	  <div>
		<h2>Compose</h2><hr style="margin-bottom:20px; margin-top:0px;"/>
		<form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post">
		  <input type="text" placeholder="Title of your post" name="title" />
		  <textarea name="post" rows="10" cols="20" placeholder="Type in your post here."></textarea>
		  <input type="submit" class="button" value="Post"/>
          <?php if(isset($message)) { ?><div class="alert alert-box"><?php echo($message); ?></div><?php } ?>
		</form>
	  </div>
	</div>
	<div class="columns post">
	  <div>
		<h3>Just your public blogging board for now.</h3><hr style="margin-bottom:20px; margin-top:0px;"/>
        <p> We will be implementing groups and issues and topics and question and a lot of other stuff, but for now, just use this as simple public writing board. Just be sure you post nothing private, because there is no privacy, and be nice to everyone. </p>
	  </div>
	</div>
  </div>
  <div class="large-8 columns">
	<div class="row">
	  <div class="large-6 columns" style="padding:0px;" id="post-col-1"> </div>
	  <div class="large-6 columns" style="padding:0px;" id="post-col-2"> </div>
	</div>
  </div>
</div>
<script>renderPostbook(<?php echo(json_encode(query("SELECT `sender`, `post`, `title` FROM `postbook` WHERE 1"))); ?>)</script>
<?php render("footer_foundation.php"); ?>