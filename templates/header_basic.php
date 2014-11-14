<!DOCTYPE html>
<head>
	<title> <?php if(isset($title)) echo($title); else echo("Edunet"); ?> </title>
	<link <?php echo("href=".STYLESHEETS."/styles.css"); ?> rel="stylesheet" type="text/css">
	<?php if(isset($style)): ?> <link <?php echo("href=".STYLESHEETS."/".$style.".css"); ?> rel="stylesheet" type="text/css"> <?php endif ?>
</head>
<body>
    <header>
        <div>
	        <br/>
            <table align="left"> <tr>
                 <td  width="20%"> </td>
                 <td> <img <?php echo("src=".IMAGES."/logo.png"); ?> alt="Edunet" height="80"/> </td>
                 <td  width="15%"> </td>
                 <td> <span class="headnav text"> <h2> Edunet </h2> </span> </td>
            </tr> </table>
        </div>
        <div>
            <a <?php echo("href=\"".CONTROLLER."/\""); ?>> <input type="submit" value="Home" class="form_submit" id="header_dashboard_redirect"/> </a>
        </div>
        <nav class="text navbar">
            <ul>
                <li><a href="courseware.php", <?php if($navpos=="courseware") echo("id=current_navpos")?>>Courseware</a></li>
                <li><a href="development.php", <?php if($navpos=="development") echo("id=current_navpos")?>>Development</a></li>
                <li><a href="discussions.php", <?php if($navpos=="discussions") echo("id=current_navpos")?>>Discussions</a></li>
                <li><a href="schools.php", <?php if($navpos=="schools") echo("id=current_navpos")?>>Schools</a></li>
                <li><a href="events.php", <?php if($navpos=="events") echo("id=current_navpos")?>>Events</a></li>
            </ul>
            <br/>
        </nav>
        <br/><br/>
    </header>
</body>
</html>
