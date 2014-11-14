<?php render("header_basic.php", ["title" => "", "navpos" => "", "style" => "courseware"]) ?>
<main>
    <div align="center">
        <img <?php echo("src=".IMAGES."/construction.gif"); ?> alt="Under Construction"/>
    </div>
    <div align="cenetr" class="text" style="text-align:center">
        <a <?php echo("href=".CONTROLLER."/login.php"); ?>> Go to Login Page </a>
    </div>
    <div align="center" class="text" style="text-align:center">
        <?php
            if(isset($_SESSION["id"]))
            {
                echo("You are ". $_SESSION["id"] . ". " . $_SESSION["name"]);
            }
        ?>
    </div>
    <div class="text header_apology">
       <br/> This part of the website is still being developed. Sorry for the Inconvinience.
       <br/> <?php if(isset($catchnotimplementederror)) print($catchnotimplementederror); ?>
    </div>
    <br/> <br/>
    <div align="center">
       <form method="POST" action="logout.php">
            <input type="submit" value="Log Out" class="form_submit"/>
        </form>
    </div>
</main>
<?php render("footer_basic.php"); ?>
