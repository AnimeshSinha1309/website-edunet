<!DOCTYPE html>
<head>
	<title> Event Registeration </title>
	<link href="/stylesheets/styles.css" rel="stylesheet" type="text/css">
</head>
<body>
    <header>
        <div>
	        <br/>
            <table align="left"> <tr>
                 <td  width="20%"> </td>
                 <td> <img src="/images/logo.png" alt="Edunet" height="80"/> </td>
                 <td  width="15%"> </td>
                 <td> <span class="headnav text"> <h2> Edunet </h2> </span> </td>
            </tr> </table>
        </div>
        <div>
            <a href="/"> <input type="submit" value="Home" class="form_submit" id="header_dashboard_redirect"/> </a>
        </div>
        <nav class="text navbar">
            <ul>
                <li><a href="courseware.php">Courseware</a></li>
                <li><a href="/">Development</a></li>
                <li><a href="/">Schools</a></li>
                <li><a href="events.php">Events</a></li>
                <li><a href="/" id="current_navpos">Under Development</a></li>
            </ul>
            <br/>
        </nav>
    </header>
    <br/><br/>
    <main>
	    <div align="center">
            <img src="/images/construction.gif" alt="Under Construction"/>
        </div>
        <div align="cenetr" class="text" style="text-align:center">
            <a href=/login.php> Go to Login Page </a>
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
</body>
</html>
