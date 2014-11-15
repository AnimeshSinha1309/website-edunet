<!DOCTYPE html>
<head>
	<title> Register </title>
	<link <?php echo("href=".STYLESHEETS."/styles.css"); ?> rel="stylesheet" type="text/css">
	<link <?php echo("href=".STYLESHEETS."/register.css"); ?> rel="stylesheet" type="text/css">
</head>
<body id="body_avgmargin">
	<header>
        <table align="center"> <tr>
            <td> <?php echo("<img src=".IMAGES."/logo.png"); ?> alt="Edunet" height="150"/> </td>
            <td  width="30"> </td>
            <td>
				<table>
	               	<tr> <td class="text header_title"> Sign up for Edunet </td> </tr>
	                <tr> <td class="text header_subtitle"> And join in with a growing all-school network </td> </tr>
				</table>
            </td>
		</tr> </table> <br/>
    </header>
    <main>
        <div id="signup_about">
            <div id="signup_aboutbox">
                <div class="text header_subtitle header_aboutus">
                    What is Edunet?
                </div>
                <div class="text header_aboutus">
                    Edunet is my idea of what the website of a school or an educational institution should be like. But more than
                    being for just one school, its for all schools, all students, all teacher, and everybody affiliated to any 
                    educational institution. <br/>
                    What are you going to see here. Well, here's what:
                    <ul>
                        <li> Discussion forums mediated by expert students and teachers. </li>
                        <li> All time help by your friends and teachers on topics you need. </li>
                        <li> Place to register for school activities, so you don't have to waste time in school. </li>
                        <li> Showcase your abilities. Answer online tests and upload videos. </li>
                        <li> Hear about design ideas and study strategies from the best students and teachers. </li>
                        <li> Upload your website here, for free! </li>
                        <li> Stay uptaded with whats being done in class, even if you missed it there. </li>
                        <li> Have your schools homepage hosted with us. </li>
                        <li> And, be a part of edunet team, and be super smart. </li>
                    </ul>
                </div>
                <br/>
                <div class="text header_subtitle header_aboutus">
                    Take a tour.
                </div>
                <div class="text header_aboutus">
                    Want to know what edunet is and looks like before signing up. Here is our video on what what edunet is till 
                    now, so, go ahead and take a look.
                </div>
                <div class="iframe_youtubevideo">
                    <iframe class="iframe_youtubevideo" align="left" width="512" height="306" src="//www.youtube.com/embed/r1qtaEB9vL4" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="text header_subtitle header_aboutus">
                    Want to take a peek at the code. 
                </div>
                <div class="text header_aboutus">
                    Here is a short video about what languages we have used in the website. Of course, this is just temporary and 
                    I will soon replae this with more detailed analysis of the code, but that can happen only when I am dome with 
                    a significant chunck of the website.
                </div>
                <div class="iframe_youtubevideo">
                    <iframe class="iframe_youtubevideo" align="left" width="512" height="306" src="//www.youtube.com/embed/3f0tMs1mT24" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <div id="signup_form" align="center">
            <div id="signup_formbox" align="center">
                <?php if (isset($apology)): ?>
                    <p class="text text_apology"> <?php print("Error: " . htmlspecialchars($apology)) ?> </p>
                <?php endif ?>
                <form method="post" action="register.php" id="floatingdivs">
			        <label class="text"> <strong> Name </strong> </label>
			        <input align="middle" class="form_text" name="FirstName" type="text" placeholder="First" spellcheck="false">
			        <input align="middle" class="form_text" name="LastName" type="text" placeholder="Last" spellcheck="false">
			        <br/> <label class="text"> <strong> Google Account </strong> </label>
			        <input align="middle" class="form_text" name="GoogleAcc" type="email" placeholder="eg. AnimeshSinha1309@gmail.com" spellcheck="false">
			        <br/> <label class="text"> <strong> Password </strong> </label>
			        <input align="middle" class="form_text" name="Password" type="password" placeholder="Password" spellcheck="false">
			        <br/> <label class="text"> <strong> Confirm Password </strong> </label>
			        <input align="middle" class="form_text" name="Conformation" type="password" placeholder="Password" spellcheck="false">
			        <br/> <label class="text"> <strong> Edunet Username </strong> (For future use only) </label>
			        <input align="middle" class="form_text" name="Username" type="text" placeholder="eg. AnimeshSinha" spellcheck="false">
			        <br/> <label class="text"> <strong> Date of Birth </strong> </label>
			        <input align="middle" id="register_birthday_date" maxlegth="2" class="form_text" placeholder="Date" name="BirthDate" type="text" spellcheck="false">
                    <select name="BirthMonth" class="form_select">
                        <option value=""> Month </option>
                        <option value="01"> January </option>
                        <option value="02"> February </option>
                        <option value="03"> March </option>
                        <option value="04"> April </option>
                        <option value="05"> May </option>
                        <option value="06"> June </option>
                        <option value="07"> July </option>
                        <option value="08"> August </option>
                        <option value="09"> September </option>
                        <option value="10"> October </option>
                        <option value="11"> November </option>
                        <option value="12"> December </option>
                    </select>
			        <input align="middle" maxlegth="4" class="form_text" placeholder="Year" name="BirthYear" type="text" spellcheck="false">
			        <br/> <label class="text text_small"> <strong> Account Type </strong> </label> <br/>
			        <div id="">
			            <input align="middle" class="form_radio" name="Account" type="radio" value="Student"> <label class="text"> Student </label> </input> <br/>
			            <input align="middle" class="form_radio" name="Account" type="radio" value="Coach"> <label class="text"> Coach </label> </input> <br/>
			            <input align="middle" class="form_radio" name="Account" type="radio" value="Developer"> <label class="text"> Developer </label> </input> <br/>
                    </div>
			        <br/> <label class="text text_small"> <strong> School </strong> </label>
			        <input align="middle" class="form_text" name="School" type="text" placeholder="eg. St. Thomas" spellcheck="false">
			        <br/> <label class="text text_small"> <strong> Grade / Standard </strong> </label>
			        <input align="middle" class="form_text" name="Grade" type="text" placeholder="eg. Std. 9 or M.Tech" spellcheck="false">
			        <br/> <label class="text text_small"> <strong> Introductary video (Youtube link) </strong> </label>
			        <input align="middle" class="form_text" name="Intro" type="url" placeholder="Link to the video" spellcheck="false">
                    <br/>
			        <input align="middle" type="submit" class="form_submit" value="Register">
                </form>
                <br/>
                <div class="text">
                	<a href="login.php"> Log in if you already have an account. </a>
                </div>
            </div>
        </div>
    </main>
    <footer> </footer>
</body>
</html>
