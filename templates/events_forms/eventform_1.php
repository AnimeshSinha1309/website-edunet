<?php render("header_basic.php", ["title" => "Events", "navpos" => "events", "style" => "events"]); ?>
<main id="body_lowmargin">
    <div id="event_form">
        <div class="text header_subtitle" id="event_register_announcement_a"> Event Registration Form for NSEJS </div>
        <hr/><hr/><br/>
        <form method="POST" action="eventforms_cont.php?f=event_1">
            <label class="text header_eventform"> About You </label> <br/>
            <br/><label class="text"> Your Name (Full) </label>
            <input class="form_text" name="name" type="text" placeholder="Your Name" spellcheck="false"> </input>
            <br/><label class="text"> Your School </label>
            <input class="form_text" name="name" type="text" placeholder="eg. St. Thomas" spellcheck="false"> </input>
            <br/><label class="text"> Contact Details </label>
            <input class="form_text" name="grade" type="email" placeholder="eg. AnimeshSinha1309@gmail.com" spellcheck="false"> </input>
            <input class="form_text" name="mobile" type="text" placeholder="eg. 9856124312" spellcheck="false"> </input>
            <br/><hr/>
            <br/><label class="text header_eventform"> Meeting the Criteria </label> <br/>
            <br/> <div> <label class="text"> You must be born on or after 1 January 2000 to participate </label> </div>
            <input name="age" type="checkbox" class="form_checkbox"> <span class="text"> Your Age conforms to the restriction </span> </input>
            <br/> <br/> <div> <label class="text"> You should be in or above class 7 </label> </div>
            <input name="std" type="radio" value="std7"> <span class="text"> Class 7 </span> </input>
            <input name="std" type="radio" value="std8"> <span class="text"> Class 8 </span> </input>
            <input name="std" type="radio" value="std9"> <span class="text"> Class 9 </span> </input>
            <input name="std" type="radio" value="std10"> <span class="text"> Class 10 </span> </input>
            <br/><br/><hr/>
            <br/><label class="text header_eventform"> Performance Record </label> <br/>
            <br/> <div> <label class="text"> Have you participated in HBCSE Olympiads before </label> </div>
            <input name="prev_nsejs" type="checkbox" class="form_checkbox"> <span class="text"> NSEJS </span> </input>
            <input name="prev_rmo" type="checkbox" class="form_checkbox"> <span class="text"> RMO </span> </input>
            <br/> <br/> <div> <label class="text"> What was your percentage last year </label> </div>
            <input name="std" type="radio" value="std7"> <span class="text"> &lt; 60% </span> </input>
            <input name="std" type="radio" value="std8"> <span class="text"> 61% - 75% </span> </input>
            <input name="std" type="radio" value="std9"> <span class="text"> 76% - 85% </span> </input>
            <input name="std" type="radio" value="std10"> <span class="text"> 86% - 100% </span> </input>
            <br/><br/><hr/>
            <br/> <input name="pay" type="checkbox" class="form_checkbox"> <span class="text"> I will be paying the registeration fee of Rs. 100 to the concerned teacher </span> </input>
            <br/> <input class="form_submit" type="submit" value="Sign up for NSEJS"/>
        </form>
        <a <?php print("href=".CONTROLLER."/eventforms_cont.php?d=event_1"); ?>> <input class="form_submit_red" type="submit" value="View Database"/> </a>
    </div>
    <div id="event_notice">
        <div class="text">
            <label class="text"> <strong> What is IJSO </strong> </label> <br/>
            <p> The International Junior Science Olympiad (IJSO) is a competitive examination open to students of all countries
            in the world, primarily studying in secondary schools. All basic subjects of Science (Physics, Chemistry, Biology
            and Mathematics) are given roughly equal representation in the IJSO examination. </p>
        </div>
        <div class="text">
            <label class="text"> <strong> The Path to International Olympiads </strong> </label> <br/><br/>
            The International Olympiad (IO) programme follows a five stage process.
            <ul>
                <li>Stage one - National Standard Examinations (NSEs) in Physics, Chemistry, Biology, Astronomy, Junior Science organized by IAPT. Statewise quota is available here.</li>
                <li>Stage two - is the Indian National Olympiad (INO) examinations. The eligible students from stage one can participate in INO in respective subjects.</li>
                <li>Stage three - is the Orientation Cum Selection Camps (OCSC). For these camps, 35 students in each subject will be selected from INO on performance basis</li>
                <li>Stage four - These students will have a Pre Departure Training (PDT) for two weeks.</li>
                <li>Stage five - Participation in International Olympiad (IO) of the selected students.</li>
            </ul>
        </div>
        <div class="text">
            <label class="text"> <strong> Description and Rules of NSEJS </strong> </label> <br/><br/>
            NSEJS conducted by IAPT is the nations premier examination in Junior Science. It is the first of the 5 stages of the 
            Olympiad, and all future Stages are conducted by HBCSE. State quota is available for qualification to next round. 
            It is the only path for qualification into IJSO. The exam is 2 hours long and there are a total of 80 multiple choice 
            question (marked +3 and -1). Non-programmable calculators are permitted.
            <br/><br/>
        </div>
        <div class="text">
            <label class="text"> <strong> External Links </strong> </label> <br/><br/>
            <a href="www.iapt.org.in"> Indian Association of Physics Teachers </a><br/>
            <a href="www.iapt.org.in"> Olympiads at Homi Bhabha Center for Science Education </a><br/><br/>
        </div>
        <label class="text"> <strong> Teacher in Charge: Mrs. Monica Sood </strong> </label> <br/>
        <label class="text"> <strong> Registeration fee: Rs. 100 </strong> </label> <br/>
        <label class="text"> <strong> Examination Date: 23 November 2014 </strong> </label> <br/>
        <label class="text"> <strong> Last Date for Registeration: 15 September 2014 </strong> </label> <br/><br/>
        <div class="text">
            <label class="text"> <strong> And that was IJSO last year </strong> </label> <br/><br/>
            <iframe width="427" height="255" src="//www.youtube.com/embed/hu-8hu91i64" frameborder="0" class="iframe_youtubevideo" allowfullscreen></iframe>
        </div>
    </div>
</main>
<?php render("footer_basic.php"); ?>
