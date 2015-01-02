<?php render("header_foundation.php", ["title" => "Events", "navpos" => "events", "style" => "events"]); ?>
<style>ul{margin-left:10px;}</style>
<main style="padding-top:20px; background-color:#EEE">
  <div class="row">
    <section id="event_form" class="small-6 columns">
        <div><h2>Event Registration Form for NSEJS</h2></div>
        <hr/>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>?f=eventform-1">
		  <!-- Personal Details -->
          <div><h4>About You</h4></div>
		  <div class="row collapse">
            <label class="hide"> Your Name </label>
            <div class="small-2 columns"><span class="prefix"><i class="fi-torso"></i></span></div>
            <div class="small-10 columns"><input name="name" type="text" placeholder="Your Name" spellcheck="false"> </input></div>
          </div>
		  <div class="row collapse">
            <label class="hide"> Your School </label>
            <div class="small-2 columns"><span class="prefix"><i class="fa fa-graduation-cap"></i></span></div>
            <div class="small-10 columns"><input name="name" type="text" placeholder="Your School" spellcheck="false"> </input></div>
		  </div>
		  <div class="row collapse">
            <label class="hide"> Your Class </label>
            <div class="small-2 columns"><span class="prefix"><i class="fa fa-gear"></i></span></div>
            <div class="small-10 columns"><input name="name" type="text" placeholder="Your class and section (eg. Std. 9 'A')" spellcheck="false"> </input></div>
		  </div>
		  <!-- Personal Details -->
          <div><h4>Contact Details</h4></div>
		  <div class="row collapse">
            <label class="hide"> Mobile Phone </label>
            <div class="small-2 columns"><span class="prefix"><i class="fa fa-mobile"></i></span></div>
            <div class="small-10 columns"><input name="name" type="tel" placeholder="Mobile Number" spellcheck="false"> </input></div>
          </div>
		  <div class="row collapse">
            <label class="hide"> Your Email </label>
            <div class="small-2 columns"><span class="prefix"><i class="fi-mail"></i></span></div>
            <div class="small-10 columns"><input name="name" type="email" placeholder="Your Email ID" spellcheck="false"> </input></div>
		  </div>
		  <!-- Examination Criteria -->
          <div><h4>Meeting the Criteria</h4></div>
          <div class="row collapse">
            <label class="hide">Age Confirm</label>
            <input name="age" type="checkbox"><span class="text"> You were born on or after 1 January 2000.</span></input>
		  </div>
          <ul class="button-group">
            <div>Class you belong to</div>
            <li>
              <label class="button secondary access-radio" id="access-radio-1">
                <input type="radio" name="cl9" class="button-radio hide" onChange="radiobutton('access-radio-1');">Class 8
              </label>
            </li>
            <li>
              <label class="button secondary access-radio" id="access-radio-2">
                <input type="radio" name="cl9" class="button-radio hide" onChange="radiobutton('access-radio-2');">Class 9
              </label>
            </li>
            <li>
              <label class="button secondary access-radio" id="access-radio-3">
                <input type="radio" name="cl9" class="button-radio hide" onChange="radiobutton('access-radio-3');">Class 10
              </label>
            </li>
          </ul>
		  <!-- Examination Criteria -->
          <div><h4>Tell us a little More</h4></div>
            <div class="row collapse">
              <div>Have you participated in HBCSE Olympiads before</div>
              <div class="row">
                <div class="small-4 columns"><input name="prev_js" type="checkbox"><span class="text"> NSEJS</span></input></div>
                <div class="small-8 columns"><input name="prev_rmo" type="checkbox"><span class="text"> RMO</span></input></div>
              </div>
            </div>
            <div class="row collapse">
              <div>What was your percentage last year</div>
              <ul style="list-style-type:none;">
                <li><input name="std" type="radio" value="std7"><span class="text"> Less than 60%</span></input><br/></li>
                <li><input name="std" type="radio" value="std8"><span class="text"> 61% to 75%</span></input><br/></li>
                <li><input name="std" type="radio" value="std9"><span class="text"> 76% to 85%</span></input><br/></li>
                <li><input name="std" type="radio" value="std10"><span class="text"> 86% to 100%</span></input><br/></li>
              </ul>
            </div>
            <hr/>
            <div class="row collapse">
              <input name="pay" type="checkbox" class="form_checkbox">
                <span class="text">I know that I need to pay a registeration fee of Rs 100.</span>
              </input>
            </div>
            <br/> <input class="button" type="submit" value="Sign up for NSEJS"/>
	        <a <?php print("href=".CONTROLLER."/eventforms_cont.php?d=event_1"); ?>> <input class="button success" type="submit" value="View Database"/> </a>
        </form>
    </section>
    <section id="event_notice" class="small-6 columns">
      <div class="text">
        <div><strong>What is IJSO</strong></div>
          <p class="text-justify"> The International Junior Science Olympiad (IJSO) is a competitive examination open to students of all countries in the world, primarily studying in secondary schools. All basic subjects of Science (Physics, Chemistry, Biology and Mathematics) are given roughly equal representation in the IJSO examination. </p>
        </div>
      <div>
        <div><strong>The Path to International Olympiads</strong></div>
          The International Olympiad (IO) programme follows a five stage process.
          <ul class="text-justify">
            <li>Stage one - National Standard Examinations (NSEs) in Physics, Chemistry, Biology, Astronomy, Junior Science organized by IAPT. Statewise quota is available here.</li>
            <li>Stage two - is the Indian National Olympiad (INO) examinations. The eligible students from stage one can participate in INO in respective subjects.</li>
            <li>Stage three - is the Orientation Cum Selection Camps (OCSC). For these camps, 35 students in each subject will be selected from INO on performance basis</li>
            <li>Stage four - These students will have a Pre Departure Training (PDT) for two weeks.</li>
            <li>Stage five - Participation in International Olympiad (IO) of the selected students.</li>
          </ul>
        </div>
        <div>
          <div><strong>Description and Rules of NSEJS</strong></div>
          <p class="text-justify">NSEJS conducted by IAPT is the nations premier examination in Junior Science. It is the first of the 5 stages of the Olympiad, and all future Stages are conducted by HBCSE. State quota is available for qualification to next round. It is the only path for qualification into IJSO. The exam is 2 hours long and there are a total of 80 multiple choice question (marked +3 and -1). Non-programmable calculators are permitted.</p>
        </div>
        <div><br/>
          <div><strong> External Links </strong></div>
          <a href="../events_forms/www.iapt.org.in"> Indian Association of Physics Teachers</a>
          <a href="../events_forms/www.iapt.org.in"> Olympiads at Homi Bhabha Center for Science Education</a>
        </div>
        <div><br/>
          <div>Teacher in Charge: Mrs. Monica Sood</div>
          <div>Registeration fee: Rs. 100</div>
          <div>Examination Date: 23 November 2014</div>
          <div>Last Date for Registeration: 15 September 2014</div>
        </div>
        <div class="row collapse"><br/>
          <div><strong>And that was IJSO last year</strong></div>
          <iframe width="427" height="255" src="//www.youtube.com/embed/hu-8hu91i64" frameborder="0" class="iframe_youtubevideo" allowfullscreen></iframe>
        </div>
    </section>
  </div>
</main>
<?php render("footer_foundation.php"); ?>
