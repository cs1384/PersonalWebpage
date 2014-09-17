<?include 'status.php'?>
<html>
    <head>
    	<title>Tin x Programmer</title> 
			<link href="css/ui-lightness/jquery-ui-1.10.3.custom.css" rel="stylesheet">
			<link rel="stylesheet" type="text/css" href="css/about.css" />
			<script src="javascript/jquery-1.11.0.js"></script>
			<script src="javascript/jquery-ui-1.10.3.custom.js"></script>
			<script src="javascript/about.js"></script> 
	</head>
    <body>
        <header>
            <? include 'header.php'?>
        </header>
        <div id="menu">
            <a href="#controlBar"><div id="toTop">T</div></a>
            <a href="#education"><div id="toEducation">E</div></a>
            <a href="#experience"><div id="toExperience">E</div></a>
            <a href="#contact"><div id="toContact">C</div></a>
        </div>
        <div id="intro">
            <div>
            <p>
                Hi, I am Yen-Tin Liu, current master student in Computer Science Department of Courant 
                Institute of Mathematical Science at NYU and expected to graduate in May, 2015.
            </p>
            <p>
                I majored in Economics during my undergraduate study in National Tsing Hua Univeristy in 
                Taiwan. In the junior year, I took my first programming course and was immediately captivated 
                by the creativity of CS. After starting to make it, I was also fascinated by the power of 
                information system and business analysis programs and enjoyed the discussions of interface, 
                database and operational logic with programmers in program development/modification. On the 
                weekends, I participated in professional programs offered by Natioanl Taiwan University to 
                learn more about Linux, PHP, MySQL and Javascript.
            </p>
            <p>
                Eventually I decided to change my field of study to Computer Science and had a great start 
                in New York University. After one year solid training in the program 
                (<a href="about.php#contact">check my skill set</a>), I am looking for 
                the full-time position starting from May 2015 and ready to bring my skills and enthusiasm to your team!
            </p>
            </div>
            <img src="artwork/life.jpg">
        </div>
        <div id="education">
            <div id="nyu">
                <a href="https://www.nyu.edu/" target="_blank"><img src="artwork/NYU.png"></a>
                <div class="title">
                    <div class="left">New York University, New York NY</div>
                    <div class="right">May 2015</div>
                </div>
                <div class="subtitle">
                    <div class="left">Master of Science in Computer Science</div>
                    <div class="right">3.73/4.00</div>
                </div>
                <p>
                    <span>Coursework by 2014 summer:</span> Java and Data Structure (PAC1), Mathematical Techniques for CS 
                    Application, Foundamental Algorithm, Programming Languages, Operating Systems, Database 
                    Systems, Production Quality Software. <a href="http://cs.nyu.edu/webapps/courses/">See Course Description</a>  
                </p>
            </div>
            <div id="nthu">
                <a href="http://www.nthu.edu.tw/english/index.php" target="_blank"><img src="artwork/NTHU.png"></a>
                <div class="title">
                    <div class="left">National Tsing Hua University, Taiwan</div>
                    <div class="right">June 2009</div>
                </div>
                 <div class="subtitle">
                    <div class="left">Bachelor of Arts in Economics</div>
                    <div class="right">3.45/4.00</div>
                </div>
                <p>
                    <span>Coursework in Math and Analysis:</span> Calculus, Linear Algebra, Statistics, 
                    Mathematical Statistics, Econometrics.
                </p>
                <p>
                    <span>Coursework in Finance:</span> Intermediate Accounting, Financial Management, 
                    Corporation Finance, Future Market, Derivatives Market.
                </p>
            </div>
            <div id="ck">
                <a href="http://web.ck.tp.edu.tw/web2007en/index.php" target="_blank"><img src="artwork/CK.jpg"></a>
                <div class="title">
                    <div class="left">Jianguo High School, Taiwan</div>
                    <div class="left">June 2005</div>
                </div>
                <div class="subtitle">
                    <div class="left">The best high school in the country!</div>
                </div>
                <p>
                    CKCF camelbell29
                </p>
            </div>
        </div>
        <div id="experience">
            <div id="clipper">
                <div class="txt">
                    <div class="title">
                        <div class="left">Campus Clipper, New York NY</div>
                    </div>
                    <div class="subtitle">
                        <div class="left">Web Developer, Feb 2014 - Aug 2014</div>
                    </div>
                </div>
                <div class="image">
                    <a href="http://www.campusclipper.com/" target="_blank"><img src="artwork/campusClipper.jpg"></a>
                </div>
                <p>
                    Membership system, login status tracking and account management. 
                </p>
                <p>
                    Based on our coupon database to provide filter, suggest functions. Also allow members to bookmark favorite coupons and leave comments.
                </p>
                <p>
                    Manipulate cookie and session to enable the shopping cart function. But haven't carry out the payment function.
                </p>
                <p>
                    <a href="http://www.campusclipper.com/CCVersion2/">Unpublished Link</a> 
                </p>
              
            </div>
            <div id="nyutsa">
                <div class="txt">
                    <div class="title">
                        <div class="left">NYU Taiwanese Student Association, New York NY</div>
                    </div>
                    <div class="subtitle">
                        <div class="left">Web Administrator, Feb 2014 - Aug 2014</div>
                    </div>
                </div>
                <div class="image">
                    <a href="http://nyutsa.com/" target="_blank"><img src="artwork/nyutsa.jpg"></a>
                </div>
                <p>
                    Maintained the hosting files and databases on <a target="_blank" href="https://www.godaddy.com/">www.godaddy.com</a> and designed official website with WordPress. <a href="http://nyutsa.com/" target="_blank">NYUTSA</a>  
                </p>
            </div>
            <div id="evergreen">
                <div class="txt">
                    <div class="title">
                        <div class="left">Evergreen Marine Corp. (Taiwan) Ltd., Taiwan</div>
                    </div>
                    <div class="subtitle">
                        <div class="left">Finance Associate, July 2014 - May 2014</div>
                    </div>
                </div>
                <div class="image">
                    <a href="http://www.evergreen-line.com/" target="_blank"><img src="artwork/evergreen.png"></a>
                </div>
                <p>
                    As financial data processing center, rationally split the group revenue and expense to all ship owners and provided by-route financial report to the top managers.
                </p>
            </div>
        </div>
        <div id="contact">
            <div id="links">
                <div>
                    <img src="artwork/resume.png"><a href="resume.pdf" target="_blacnk">RESUME<a>
                </div>
                <?
                if(isSet($_SESSION['tinloginemail']) && isSet($_SESSION['tinlogintoken'])){
                ?>
                    <form action="uploadResume.php" method="post" enctype="multipart/form-data">
                    <input type="submit" name="submit" value="upload" />
                    updated resume (.pdf): <input type="file" accept=".pdf" name="file" id="file" />  
                    </form>         
                <?
                }
                ?>
                <div>
                    <img src="artwork/email.png"><a href="mailto:ytl264@nyu.edu">ytl264@cs.nyu.edu<a>
                </div>
                <div>
                    <img src="artwork/github.png"><a href="https://github.com/cs1384" target="_blacnk"> cs1384<a>
                </div>
                <div>
                    <img src="artwork/facebook.png"><a href="https://www.facebook.com/yentin.liu.5" target="_blacnk"> Tin Liu<a>
                </div>
                <div>
                    <img src="artwork/linkedin.png"><a href="https://www.linkedin.com/pub/yen-tin-liu/6b/100/270" target="_blacnk"> Yen-Tin Liu<a>
                </div>
            </div>
            <div id="skills">
                <div>Skill SET</div>
                <p>
                    <span>Programming Languages:</span> Java, C/C++, MATLAB, Python 
                </p>
                <p>
                    <span>Operating Systems:</span> Windows, iOS, Linux
                </p>
                <p>
                    <span>Web Development:</span> HTML, CSS, Javascript, JQuery, PHP, SQL
                </p>
                <p>
                    <span>Languages:</span> Chinese(Native), English
                </p>
                <p>
                    <span>Application Software:</span> STATA, Excel(VBA), Microsoft Office
                </p>
                
            </div>
        </div>
    </body>
</html>