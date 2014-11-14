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
                <li><a href="events.php" id="current_navpos">Events</a></li>
            </ul>
            <br/>
        </nav>
    </header>
    <br/><br/>
    <main class="margin_body_lower">
        <div id="event_form">
            <div class="text header_subtitle" id="event_register_announcement_a">
                Event Registration Form
            </div>
            <br/><br/>
            <form method="POST" action="events.php">
                <label class="text"> Your Name (Full) </label>
                <input class="form_text" name="Name" type="text" placeholder="Your Name" spellcheck="false">
            </form>
        </div>
    </main>
</body>
</html>
