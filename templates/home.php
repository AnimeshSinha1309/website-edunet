<?php render("header_basic.php", ["title" => "Home", "navpos" => "@underdev", "style" => "home"]) ?>
<main>
    <div align="center">
        <img <?php echo("src=".IMAGES."/construction.gif"); ?> alt="Under Construction"/>
    </div>
    <div align="center" class="text" style="text-align:center">
        <a > Go to Login Page </a>
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
    <div align="center" id="footer_sitenav">
        <div class="text header_subtitle">
            Edunet - The Educational network
        </div>
        <br/>
        <a href="courseware.php">
            <img <?php echo("src=".IMAGES."/sitenav_mains_courseware.jpg"); ?> alt="Courseware" height="100" width="200"/>
        </a> <a href="development.php">
            <img <?php echo("src=".IMAGES."/sitenav_mains_development.jpg"); ?> alt="Development" height="100" width="200"/>
        </a> <a href="discussions.php">
            <img <?php echo("src=".IMAGES."/sitenav_mains_discussions.jpg"); ?> alt="Discussions" height="100" width="200"/>
        </a> <a href="events.php">
            <img <?php echo("src=".IMAGES."/sitenav_mains_events.jpg"); ?> alt="Events" height="100" width="200"/>
        </a> <a href="schools.php">
            <img <?php echo("src=".IMAGES."/sitenav_mains_schools.jpg"); ?> alt="Schools" height="100" width="200"/>
        </a>
    </div>
</main>
<?php render("footer_basic.php") ?>

