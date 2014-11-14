<?php render("header_basic.php", ["title" => "Events", "navpos" => "events", "style" => "events"]); ?>
<main id="body_lowmargin">
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
<?php render("footer_basic.php"); ?>
