<?php render("header_foundation.php", array("stylesheet" => "postbook", "script" => "postbook", "navpos" => "postbook")); ?>
<div style="margin-top:30px; margin-bottom:25px; margin-left:100px; margin-right:100px;">
  <div class="large-4 columns">
	<div class="columns post">
	  <div>
		<h2>Compose</h2><hr style="margin-bottom:20px; margin-top:0px;"/>
		<form action="<?php echo($_SERVER['PHP_SELF']."?group=".$_GET["group"]); ?>" method="post">
		  <input type="text" placeholder="Title of your post" name="title" autofocus="autofocus" />
		  <textarea name="post" rows="10" cols="20" placeholder="Type in your post here."></textarea>
		  <input type="submit" class="button" value="Post"/>
          <?php if(isset($message)) { ?><div class="alert alert-box"><?php echo(htmlspecialchars($message)); ?></div><?php } ?>
		</form>
	  </div>
	</div>
	<div class="columns post">
	  <div>
		<h3>Just your public blogging board for now.</h3><hr style="margin-bottom:20px; margin-top:0px;"/>
        <p> We will be implementing groups and issues and topics and question and a lot of other stuff, but for now, just use this as simple public writing board. Just be sure you post nothing private, because there is no privacy, and be nice to everyone. </p>
        <hr style="margin-bottom:20px; margin-top:0px;"/>
		<form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="get">
          <select name="group">
            <optgroup>
              <option value="debug">Developers Debuging</option>
              <option value="dvcta">Developers Computers</option>
              <option value="dvphy">Developers Physics</option>
              <option value="dvmth">Developers Mathematics</option>
            </optgroup>
            <optgroup>
              <option value="std9a">Class 9 Section A</option>
              <option value="std9b">Class 9 Section B</option>
              <option value="std9c">Class 9 Section C</option>
              <option value="std9d">Class 9 Section D</option>
              <option value="std9e">Class 9 Section E</option>
              <option value="std9f">Class 9 Section F</option>
              <option value="std8a">Class 8 Section A</option>
              <option value="std8b">Class 8 Section B</option>
              <option value="std8c">Class 8 Section C</option>
              <option value="std8d">Class 8 Section D</option>
              <option value="std8e">Class 9 Section E</option>
              <option value="std8f">Class 9 Section F</option>
            </optgroup>
          </select>
          <input type="submit" class="button success" value="go" />
        </form>
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
<script>renderPostbook(<?php echo($data); ?>)</script>
<?php render("footer_foundation.php"); ?>