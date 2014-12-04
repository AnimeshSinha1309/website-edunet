<?php render("header_foundation.php", ["navpos" => "", "style" => "courseware",]) ?>
<main>
    <div align="center">
        <img <?php echo("src=".IMAGES."/construction.gif"); ?> alt="Under Construction"/>
    </div>
    <div class="text header_apology text-center">
       <br/> This part of the website is still being developed. Sorry for the Inconvinience.
       <br/> <?php if(isset($catchnotimplementederror)) print($catchnotimplementederror); ?>
    </div>
    <br/> <br/>
</main>
</body>
</html>