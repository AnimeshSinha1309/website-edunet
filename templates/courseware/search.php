<?php render("header_foundation.php", ["title" => "Courseware", "navpos" => "courseware"]) ?>
<main>
  <div id="all-content-wrapper" class="row">
    <div id="container-maincontent" class="large-12 medium-12 small-12 columns">
      <div search-form>
        <form>
        <fieldset> <legend> Search for Courses </legend>
          <div class="row">
            <div class="large-4 columns">
              <label>Course Name
                <input type="text" placeholder="Course Name" />
              </label>
            </div>
            <div class="large-4 columns">
              <label>School
                <select name="school">
                  <option value="any">Any School</option>
                  <option value="sts-ran">St. Thomas</option>
                  <option value="jvm-sym">Jawahar Vidya Mandir</option>
                  <option value="xav-ran">St. Xaviers</option>
                  <option value="dps-ran">Delhi Public School</option>
                </select>
              </label>
            </div>
            <div class="large-4 columns">
              <label>Instructor
                <select name="school">
                  <option value="any">Any Instructor</option>
                  <option value="tch-1">Teacher 1</option>
                  <option value="tch-2">Teacher 2</option>
                  <option value="tch-3">Teacher 3</option>
                  <option value="tch-4">Teacher 4</option>
                  <option value="tch-5">Teacher 5</option>
                </select>
              </label>
            </div>
          </div>
          <div class="row">
            <div class="large-4 columns">
              <div class="row collapse">
                <label>Unique Course ID</label>
                <div class="small-9 columns">
                  <input type="text" placeholder="Course ID" />
                </div>
                <div class="small-3 columns">
                  <span class="postfix">.course</span>
                </div>
              </div>
            </div>
            <div class="large-4 columns">
              <label>Course
                <select name="school">
                  <option value="any">Any Subject</option>
                  <option value="tch-1">Physics</option>
                  <option value="tch-2">Mathematics</option>
                  <option value="tch-3">Computers</option>
                  <option value="tch-4">Chemistry</option>
                  <option value="tch-5">English</option>
                </select>
              </label>
            </div>
            <div class="large-4 columns">
              <label>Specialization
                <select name="school">
                  <option value="any">Any Specialization</option>
                </select>
              </label>
            </div>
          </div>
          <div class="row">
            <div class="large-4 columns">
              <label>Course Type</label>
              <input type="radio" name="type" value="school" id="course-type-school"><label for="pokemonRed">School</label>
              <input type="radio" name="type" value="college" id="course-type-college"><label for="pokemonBlue">College</label>
              <input type="radio" name="type" value="college" id="course-type-olympiad"><label for="pokemonBlue">Olympiad</label>
            </div>
            <div class="large-4 columns">
              <label>Level
                <select name="school">
                  <option value="any">Any Level</option>
                  <option value="any">Class 7</option>
                  <option value="any">Class 8</option>
                  <option value="any">Class 9</option>
                  <option value="any">Class 10</option>
                </select>
              </label>
            </div>
            <div class="large-4 columns">
              <label>Available Material</label>
              <input id="checkbox1" type="checkbox"><label for="checkbox1">Lectures</label>
              <input id="checkbox2" type="checkbox"><label for="checkbox2">Notes</label>
              <input id="checkbox3" type="checkbox"><label for="checkbox3">Exams</label>
            </div>
          </div>
          <div class="row">
            <label for="course-rating-slider"> Minimum Rating </label>
            <div class="small-12 medium-9 columns">
              <div class="row">
                <div class="small-12 medium-11 columns">
                  <div class="range-slider" data-slider data-options="display_selector: #sliderOutput3;">
                    <span class="range-slider-handle" role="slider" tabindex="0"></span>
                    <span class="range-slider-active-segment"></span>
                  </div>
                </div>
                <div class="small-2 medium-1 columns">
                  <span id="sliderOutput3"></span>
                </div>
              </div>
            </div>
            <div class="small-2 medium-1 columns">
              <span id="sliderOutput3"></span>
            </div>
            <div class="small-12 medium-2 columns">
              <input type="submit" value="Search" class="button"/>
            </div>
          </div>
        </fieldset>
        </form>
      </div>
      <div id="search-results">
        <div id="course-sts-609-63" class="large-4 data-equalizer-watch left course-info-search">
          <ul class="pricing-table">
            <li class="title">English Literature</li>
            <li class="price">The Merchant of Venice</li>
            <li class="description">This standard school course covers Shakespeare's famous drama 'The Merchant of Venice'.</li>
            <li class="bullet-item">St. Thomas School</li>
            <li class="bullet-item">Instructor: Pushpanjali Miss</li>
            <li class="bullet-item">Rating: 3 Star</li>
            <li class="bullet-item">Class 9 and 10</li>
            <li class="cta-button"><a class="button" href="#">Register</a></li>
          </ul>
        </div>
        <div id="course-sts-609-63" class="large-4 data-equalizer-watch left course-info-search">
          <ul class="pricing-table">
            <li class="title">English Language</li>
            <li class="price">ICSE Preparatory Course</li>
            <li class="description">A 4 week preparatory course in English Grammar based on the ICSE pattern. Filled with excercises.</li>
            <li class="bullet-item">St. Thomas School</li>
            <li class="bullet-item">Instructor: Monica Miss</li>
            <li class="bullet-item">
              <i class="step fi-star size-36"></i>
              <i class="step fi-star size-36"></i>
              <i class="step fi-star size-36"></i>
              (Rating: 40)
            </li>
            <li class="bullet-item">Class 9 and 10</li>
            <li class="cta-button"><a class="button" href="#">Register</a></li>
          </ul>
        </div>
        <div id="course-sts-609-63" class="large-4 data-equalizer-watch left course-info-search">
          <ul class="pricing-table">
            <li class="title">Physics</li>
            <li class="price">Electricity and Magnetism</li>
            <li class="description">A schort course on the real world applicationso fo Electricity and Magnetism.</li>
            <li class="bullet-item">St. Thomas School</li>
            <li class="bullet-item">Instructor: Omesh Sir</li>
            <li class="bullet-item">Rating: 3 Star</li>
            <li class="bullet-item">Class 9 and 10</li>
            <li class="cta-button"><a class="button" href="#">Register</a></li>
          </ul>
        </div>
        <div id="course-sts-609-63" class="large-4 data-equalizer-watch left course-info-search">
          <ul class="pricing-table">
            <li class="title">English Literature</li>
            <li class="price">The Merchant of Venice</li>
            <li class="description">This standard school course covers Shakespeare's famous drama 'The Merchant of Venice'.</li>
            <li class="bullet-item">St. Thomas School</li>
            <li class="bullet-item">Instructor: Pushpanjali Miss</li>
            <li class="bullet-item">Rating: 3 Star</li>
            <li class="bullet-item">Class 9 and 10</li>
            <li class="cta-button"><a class="button" href="#">Register</a></li>
          </ul>
        </div>
        <div id="course-sts-609-63" class="large-4 data-equalizer-watch left course-info-search">
          <ul class="pricing-table">
            <li class="title">English Literature</li>
            <li class="price">The Merchant of Venice</li>
            <li class="description">This standard school course covers Shakespeare's famous drama 'The Merchant of Venice'.</li>
            <li class="bullet-item">St. Thomas School</li>
            <li class="bullet-item">Instructor: Pushpanjali Miss</li>
            <li class="bullet-item">Rating: 3 Star</li>
            <li class="bullet-item">Class 9 and 10</li>
            <li class="cta-button"><a class="button" href="#">Register</a></li>
          </ul>
        </div>
        <div id="course-sts-609-63" class="large-4 data-equalizer-watch left course-info-search">
          <ul class="pricing-table">
            <li class="title">English Literature</li>
            <li class="price">The Merchant of Venice</li>
            <li class="description">This standard school course covers Shakespeare's famous drama 'The Merchant of Venice'.</li>
            <li class="bullet-item">St. Thomas School</li>
            <li class="bullet-item">Instructor: Pushpanjali Miss</li>
            <li class="bullet-item">Rating: 3 Star</li>
            <li class="bullet-item">Class 9 and 10</li>
            <li class="cta-button"><a class="button" href="#">Register</a></li>
          </ul>
        </div>
	  </div>
    </div>
  </div>
</main>
<?php render("footer_foundation.php") ?>