<?php render("header_foundation.php", ["title" => "Schools", "navpos" => "schools"]) ?>
<style> main{margin-left:50px; margin-right:50px;} hr{border-color:#555;}</style>
<main>
  <div align="center">
    <img <?php echo("src=".IMAGES."/construction.jpg"); ?> alt="Under Construction"/>
  </div>
  <hr/>
  <div class="text header_apology text-center">
    <strong>
      <br/> This part of the website is still being developed. Sorry for the Inconvinience.
      <br/> <?php if(isset($catchnotimplementederror)) print($catchnotimplementederror); ?>
    </strong>
  </div>
  <br/> <br/>
</main>

</body>
</html>