<!DOCTYPE html>
<?php
include('contact.php');
include("db.php");
session_start(); 
$a=0;$s=null;
 if(isset($_POST['sub'])){

	$email = $_POST['email'];
	$password = $_POST['password'];
	$s="Sorry email or password is wrong";
	
	$que=mysql_query("select * from users where email='$email' AND password='$password'");
	while($row=mysql_fetch_array($que))
	{
	$a=1; 
	$_SESSION['email']=$email;
	$_SESSION['id']=$row['id'];
	}
	if($a==1){header('location:profile/profile.php');}
 }
	
		

?>


<html lang="en">
<head>
<title>Latest Jobs - Latest News & All IT Solution - Tutorials,Videos,Awnsers Availble on World Solution Provider</title>
	<?php include'metatag.php'; ?>
<link rel="icon" href="fav.png" type="image/png" sizes="16x16">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<style type="text/css">
.top-bar {
  background: #EEEEEE;
  border-bottom: 1px solid #ddd;
}
.top-bar .contact-details li {
  display: inline-block;
  padding: 8px 0;
}
.top-bar .contact-details li a {
  font-size: 14px;
  display: block;
  margin-right: 15px;
  color: #999;
  line-height: 32px;
}
.top-bar .contact-details li a i {
  padding-right: 5px;
  vertical-align: middle;
}
.top-bar ul.social-list {
  float: right;
  padding: 14px 0;
}

.nav-pills {    margin-right: -100px;margin-top:20px;}
.nav-pills > li {display:inline-block; margin:0 20px;}
.nav-pills > li.active a {color:#0099ff;}
.nav-pills > li > a {color:#425fca; text-transform:uppercase; font-size:16px; font-weight:300;}

body {

color: #5a5656;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
font-size: 16px;
line-height: 1.5em;
}
a { text-decoration: none; }
h1 { font-size: 1em; }
h1, p {
margin-bottom: 10px;
}
strong {
font-weight: bold;
}
.uppercase { text-transform: uppercase; }

/* ---------- LOGIN ---------- */
#login {
margin: 50px auto;
width: 300px;
}
form fieldset input[type="text1"], input[type="password"] {
background-color: rgba(238, 163, 3, 0.39);
border: none;
border-radius: 3px;
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
color: #5a5656;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
font-size: 14px;
height: 40px;
outline: none;
padding: 0px 10px;
width: 380px;
-webkit-appearance:none;
}
form fieldset input[type="submit"] {
background-color: #425fca;
border: none;
margin-left:60px;
border-radius: 3px;
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
color: #f4f4f4;
cursor: pointer;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
height: 38px;
text-transform: uppercase;
width: 120px;
-webkit-appearance:none;
}
form fieldset a {
color: #5a5656;
font-size: 10px;
}
form fieldset a:hover { text-decoration: underline; }


.facebook {
background-color: #eea303;
border: none;
border-radius: 0px 3px 3px 0px;
-moz-border-radius: 0px 3px 3px 0px;
-webkit-border-radius: 0px 3px 3px 0px;
color: #f4f4f4;
cursor: pointer;
height: 38px;
text-transform: uppercase;
width: 125px;
    margin-left: 30px;
}
.fa{
    font-size: larger;
	margin-left: 15px;
}
</style>
    
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/wsphome.css" rel="stylesheet">
    <link href="css/jobtable.css" rel="stylesheet">
   
    <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>
<?php include_once("includes/analyticstracking.php") ?>

    <?php include"includes/header.php"?>
    <div class="clear">
    </div>
    <div id="carousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
            <li data-target="#carousel" data-slide-to="3"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active slide_1">
                <div class="row">
                    <div class="col-xs-offset-2 col-sm-10">
                        <img src="images/slider/slide-1.png" class="img-responsive"></div>
                </div>
                <div class="carousel-caption text-center">
                    <h1>
                        Solutions for all your IT needs</h1>
                </div>
            </div>
            <div class="item slide_2">
                <div class="row">
                    <div class="col-xs-offset-2 col-sm-10">
                        <img src="images/slider/slide-2.png" class="img-responsive"></div>
                </div>
                <div class="carousel-caption text-center">
                    <h1>
                        We give reality to your ideas</h1>
                </div>
            </div>
            <div class="item slide_3">
                <div class="row">
                    <div class="col-xs-offset-2 col-sm-10">
                        <img src="images/slider/slide-3.png" class="img-responsive"></div>
                </div>
                <div class="carousel-caption text-center">
                    <h1 class="text_blck">
                        services we provide</h1>
                </div>
            </div>
            <div class="item slide_4">
                <div class="row">
                    <div class="col-xs-offset-2 col-sm-10">
                        <img src="images/slider/slide4.png" class="img-responsive"></div>
                </div>
                <div class="carousel-caption text-center">
                    <h2 class="text_blck">
                        Technologies we use to build usable products</h2>
                </div>
            </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel" role="button" data-slide="prev"><span
            class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">
                Previous</span> </a><a class="right carousel-control" href="#carousel" role="button"
                    data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true">
                    </span><span class="sr-only">Next</span> </a>
    </div>
	            <div class="container" style="background-color:lavender; height:60px;">          
            <ul id="PageLink" class="nav nav-pills">
                <li class="scrolll"><a href="tutorial.php"><span class="glyphicon glyphicon-book"></span> TUTORIALS</a></li>
				<li class="scrolll"><a href="news"><span class="glyphicon glyphicon-film"></span> Video Lectures</a></li>
                <li class="scrolll"><a href="#" class="my_popup_open"><span class="glyphicon glyphicon-envelope"></span> Contact Us</a></li>
                <li class="scrolll"><a href="#login"><span class="glyphicon glyphicon-user"></span> Register/Login</a></li>
            </ul>
     </div>

    <div class="clear pad-10">
    </div>
	
    <div class="container">
        <div class="row text-left">
		<div class="col-sm-6">
            <h1 class="text_grey">
                WHO WE ARE?</h1>
            <p>
                WSP HOME is one of the leading offshore service providing company founded in 2010.
				The company operates worldwide with development office in pakistan.
				we are providing innovative IT solutions to the global asset finance and Education sector. 
				WSP Home has helped numerous businesses find their competitive edge and streamline their operations. 
				Whether you need a logo, business card, website, mobile application, order management system, shopping
                cart solution for your online business, reporting tool to carry out business analysis
                on your day to day transactions or solution to any complex IT problem.
            </p>
			</div>
			
			<div class="col-sm-5">
			
			<div id="login">
<h3><strong>Welcome.</strong> Please login.</h3>
<form action="index.php" method="post">
<fieldset>
<p><input type="text1" name="email" placeholder="Enter Username/Email" required></p>
<p><input type="password" name="password" placeholder="Enter Your Password" required></p>
<p><a href="#">Forgot Password?</a></p>
<p><input type="submit" name="sub" value="Login">
<input type="button" value="Register" class="facebook" onClick="location.href='reg.php'">
</p>
</fieldset>

</form>
<?php echo $s; ?>
</div> <!-- end login -->

			</div>
        </div>
		<?php $que=mysql_query("select * from jobs order by job_pdate DESC limit 0,4");?>
	<div class="row" id="job1">
			<div class="col-lg-5">
				<h3 style="background-color:#425fca;width:360px; color:#fff;font-size: 20px;padding:10px;font-family: 'Roboto', sans-serif;">Latest Jobs</h3>
				<?php while($row=mysql_fetch_array($que)){ ?>
				<table class="jobtable">
				<h3><a href="news/jobdetail.php?v=<?php echo $row['id']; ?>"><?php echo $row['job_title']?></a></h3>
				<tr><td><b>Location:</b> &nbsp; <small><span class="glyphicon glyphicon-map-marker"></small><?php echo $row['job_city']?> &nbsp;</span>&nbsp; <span><b>Exp:</b></span> &nbsp;<small><span class="glyphicon glyphicon-briefcase"></small> <?php echo $row['job_exp']?></span></td></tr>
				<tr><td><b>KeySkills:</b>&nbsp;<span><?php echo $row['job_skills']?></span></br>
				<b>Job Descripion:</b><p><?php $string = strip_tags($row['job_des']);

if (strlen($string) > 160) {

    // truncate string
    $stringCut = substr($string, 0, 160);

    // make sure it ends in a word so assassinate doesn't become ass...
    $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'... <a href="news/morejobs.php">Read In Detail</a>'; 
}
echo $string;?></p></td></tr>
				<tr><td><b>Salary:</b>&nbsp; <?php echo $row['job_salary']?>&nbsp;<span style="margin-left:45px;"><b>Posted By:</b></span> &nbsp;<small><span class="glyphicon glyphicon-user">&nbsp;<?php echo $row['posted_user']?> <?php echo date("j F Y", strtotime($row['job_pdate']));?></span></td></tr>
				
				</table>
				<hr style="margin-top: 0px;margin-bottom:-15px;">
				<?php } ?>
				<input type="button" value="Click For Read More Jobs >>" class="facebook" onClick="location.href='news/morejobs.php'" style="margin-top: 30px;
    margin-left: 245px;
    width: 200px;"></div>
				
	
	<div class="col-lg-7"><?php $que=mysql_query("select * from news order by pdate DESC limit 0,5");	?>
			<h3 style="background-color:#425fca;width:695px; color:#fff;font-size: 20px;padding:10px;font-family: 'Roboto', sans-serif;">Daily Updated News</h3><?php while($row=mysql_fetch_array($que)){ ?>
			<table id="nes"  style="width: 695px;
    margin-left: 5px;
    margin-top: 0px;
    background-color:white;margin-bottom:-20px;"><tr>
			<td>
			<span class=""><a title="" href=""><img src="admin/<?php echo $row['image']?>" width="225px" height="150px" alt="" style=""></a>
			</span></td>
			
			<td>
			<h2 style="margin-left:2px; margin-top:0px; font-family:.875em/1.28571 Merriweather,serif;font-size: 22px; word-break: break-all;"><b><a href="news/newsdetail.php?n=<?php echo $row['id']; ?>"  onmouseover="this.bgColor='white'" onmouseout="this.bgColor='black'"><?php echo $row['title']?></a></b></h2>
			<p style="margin-left:2px; color:#444; font-family:Merriweather,serif; font-size:16px;"> <?php $string = strip_tags($row['description']);

if (strlen($string) > 200) {

    // truncate string
    $stringCut = substr($string, 0, 200);

    // make sure it ends in a word so assassinate doesn't become ass...
    $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'... <a href="news/index.php">Read More</a>'; 
}
echo $string;?></p>
			<span style="margin-left:2px; font-size:13px; font-weight:bold;">Published:</span><b>&nbsp;<?php echo date("j F Y", strtotime($row['pdate']));?></b>
			</td></tr></table><hr style="margin-left: 110px;"><?php } ?>
			</div>
			<input type="button" value="Click For Read More News >>" class="facebook" onClick="location.href='news/index.php'" style="margin-top: -9px;
    margin-left: 435px;
    width: 200px;">	
			</div>


        <div class="clear pad-10">
        </div>
        
        <div class="row text-center" id="services">
            <h1 class="text_blue">
                SERVICES WE OFFER</h1>
            <p>
            </p>
            <div class="hi-icon-effect-2 hi-icon-effect-2a">
			<div class="col-lg-2 col-xs-6 text-center">
                    <a href="#network" class="hi-icon network">
                        <img src="images/services/ico_network.png" alt="" /></a>Network & Comunication
                </div>
                <div class="col-lg-2 col-xs-6 text-center">
                    <a href="#creative" class="hi-icon design">
                        <img src="images/services/ico_mouse.png" alt="" /></a>Creative Design
                </div>
                <div class="col-lg-2 col-xs-6 text-center">
                    <a href="#apps" class="hi-icon apps">
                        <img src="images/services/ico_mobile.png" alt="" /></a> Apps Development
                </div>
                <div class="col-lg-2 col-xs-6 text-center">
                    <a href="#web" class="hi-icon web">
                        <img src="images/services/ico_monitor.png" alt="" /></a> Web Development
                </div>
                <div class="col-lg-2 col-xs-6 text-center">
                    <a href="#bus_solv" class="hi-icon solutions">
                        <img src="images/services/ico_tuition.png" alt="" /></a> Home Tuition
                </div>
                <div class="col-lg-2 col-xs-6 text-center">
                    <a href="#social" class="hi-icon social">
                        <img src="images/services/ico_marketing.png" alt="" /></a> Social Marketing
                </div>
            </div>
        </div>
    </div>
    <div class="clear pad-20">
    </div>
    <div id="portfolio" class="cont_grey">
        <div class="container">
            <div class="row">
                <h1 class="text-center text_grey">
                    PORTFOLIO</h1>
                <p class="text-center">
                </p>
                <div class="clear pad-10">
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="hom_portfolio">
                            <img src="images/wspproj1.jpg" />
                            <a href="portfolio.php" class="caption scale-caption">
                                 <h4>
                                    Paradise Estate Pvt Ltd. website</h4>
                                <p>
                                    Paradise Estate Pvt Ltd. is a Pakistan based Real Estate Company , we designed & developed the website for their business.</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="hom_portfolio">
                            <img src="images/wspproj2.jpg" />
                            <a href="portfolio.php" class="caption scale-caption">
                               <h4>
                                    Luminious</h4>
                                <p>
                                    Luminious is the best Study & Immigration Visa Consultant website In Pakistan, They awarded us the project to design & develop the website of their Company.
									Also we provided our social marketing services to them.</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="hom_portfolio">
                            <img src="images/wspproj3.jpg" />
                            <a href="portfolio.php" class="caption scale-caption">
                                <h4>
                                    Manjeet Sonsinc Fabric</h4>
                                <p>
                                    Manjeet Sonsinc Fabric is one of the leading Fabrics Providing company in India, We developed the website for their business.</p>
                       
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="hom_portfolio">
                            <img src="images/wspproj4.png" />
                            <a href="portfolio.php" class="caption scale-caption">
                               
                            <h4>
                                    KidsEMail.org</h4>
                                <p>
                                    We designed the graphics & provided the social marketing strategies to hurdred of companies.</p>
                          
                          
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="hom_portfolio">
                            <img src="images/wspproj5.png" />
                            <a href="portfolio.php" class="caption scale-caption">
                              <h4>
                                    Trade Dukan</h4>
                                <p>
                                    We designed & developed the website solution for this company. We automate the whole
                                    business process from accepting orders to business analysis reporting for them.</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="hom_portfolio">
                            <img src="images/wspproj6.png" />
                            <a href="portfolio.php" class="caption scale-caption">
                                <h4>
                                    Seller.com.pk</h4>
                                <p>
                                    We designed & developed this classified website for online sale & Purchase.
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clear">
    </div>
	<div id="dominhosting" class="">
        <div class="container" style="margin-top: 15px;">
            <div class="row">
          <img src="images/services/domain.png" style="margin-left:-106px;">
            </div>
        </div>
    </div>
	<div id="network" class="cont_green1">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 text-center">
                    <div class="pad-30">
                    </div>
                    <div class="mt-30">
                        <img src="images/services/ico_network_big.png"></div>
                </div>
                <div class="col-lg-9">
                    <h2>
                        Network & Comunication</h2>
                    <p>
                        WSP Home specializes in understanding the in-depth technical requirements of clients and then designing the most cost effective and scalable solution.
						World Solution Provider Home: Provides Comprehensive and Customized IT and Networking solutions to small and medium-sized businesses,we perform full-service IT managment for organizations with service and security needs.</p>
                    <div>
                        <h3>
                            Technologies We Use:</h3>
                        <div class="col-lg-1">
                            Apple</div>
                           <div class="col-lg-1"> Cisco</div>
                           <div class="col-lg-3"> Domain Name Server</div>
                           <div class="col-lg-2"> Exchange Server</div>
                          <div class="col-lg-2"> LAN, MAN, WAN
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="creative" class="cont_blue">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 text-center">
                    <div class="pad-30">
                    </div>
                    <div class="mt-30">
                        <img src="images/services/ico_mouse_big.png"></div>
                </div>
                <div class="col-lg-9">
                    <h1>
                        CREATIVE DESIGN</h1>
                    <p>
                        We are one of the leading graphic design company with expertise in typography, creating colorful high end graphics. A successful application
                        is one which has attracting design & easy user experience. We here at WspHome take
                        into account all the necessary steps to ensure that an application looks excellent
                        & easy to use.
                    </p>
                    <p>
                        We specialize in designing logos, websites, flyers, brochures, animated banners,
                        business cards, letter head, infographics and lot more. We provide the whole design
                        services to a business, sky is the limit.</p>
                    <div>
                        <h2>
                            Technologies We Use:</h2>
                        <div class="col-lg-3">
                            Adobe Photoshop CS6<br>
                            Adobe After Effects CS6<br>
                            Corel Draw
                        </div>
                        <div class="col-lg-3">
                            Adobe Illustrator CS6<br>
                            Maya<br>
                            OmniGraffle
                        </div>
                        <div class="col-lg-3">
                            Adobe InDesign CS6<br>
                            Pixologic Zbrush
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clear">
    </div>
    <div id="apps" class="cont_green">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 text-center">
                    <div class="pad-30">
                    </div>
                    <div class="mt-30">
                        <img src="images/services/ico_mobile_big.png"></div>
                </div>
                <div class="col-lg-9">
                    <h1>
                        APP DEVELOPMENT</h1>
                    <p>
                        We are unique because we have a full-service approach to mobile. Our expert panel has professionals who have years of experience behind them in the field of mobile application development.We Develop educational, business & fun mobile apps, using the latest frameworks we develop cross platform apps. We develop apps for both android and iOS platform. People are spending more time on smartphone so for any business mobile apps is an essential part of business to keep up with the latest trends of market.
                    </p>
                    <div>
                        <h2>
                            Technologies We Use:</h2>
                        <div class="col-lg-2">
                            Android Sdk<br>
                            iOS
                        </div>
                        <div class="col-lg-2">
                            Javascript<br>
                            HTML
                        </div>
                        <div class="col-lg-2">
                            CSS<br>
                            Java
                        </div>
                        <div class="col-lg-2">
                            Objective C</div>
                        <div class="col-lg-2">
                            Javascript</div>
                        <div class="col-lg-2">
                            Corona Sdk</div>
                        <div class="col-lg-2">
                            PhoneGap</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clear">
    </div>
    <div id="web" class="cont_grey_drk">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 text-center">
                    <div class="pad-30">
                    </div>
                    <div class="mt-30">
                        <img src="images/services/ico_monitor_big.png"></div>
                </div>
                <div class="col-lg-9">
                    <h1>
                        WEB DEVELOPMENT</h1>
                    <p>
                       WSP Home Website Developers will transmute your astounding ideas in to workable web solutions with top aptitude web applications evolution skills on board our company will metier enthralling web apps and bounce start your enterprise.
						We at WSP Home recognize the intensity involved in web development we have talented,competent and hard work team to develop your website to expand your business and after that they maintain your website with time to time changing of technology.</p>
                    <!--<p>
                        We have in-house developed shopping cart and content management solutions that will
                        reduce the development time and cost of your website. We also specilize in developing
                        websites using open source technologies such as Wordpress. We not only create websites
                        but give all the support and maintenance to our clients websites.
                    </p>-->
                    <div>
                        <h2>
                            Technologies We Use:</h2>
                        <div class="col-lg-2">
                            HTML5<br>
                            CSS
                        </div>
                        <div class="col-lg-2">
                            PHP<br>
                            ASP.Net
                        </div>
                        <div class="col-lg-2">
                            Wordpress<br>
                            mySql
                        </div>
                        <div class="col-lg-2">
                            jquery</div>
                        <div class="col-lg-2">
                            Javascript</div>
                        <div class="col-lg-2">
                            SQL Server</div>
                        <div class="col-lg-2">
                            XML</div>
                        
						<div class="col-lg-4">
                        SOAP/REST Services</div>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clear">
    </div>
    <div id="bus_solv" class="cont_yelow">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 text-center">
                    <div class="pad-30">
                    </div>
                    <div class="mt-30">
                        <img src="images/services/ico_solution_big.png" style="margin-left:-100px;margin-top:-45px;"></div>
                </div>
                <div class="col-lg-9">
                    <h1>
                        HOME TUITION SERVICES</h1>
                    <p>
                        Our favors are free for the student, we do not charge any service charges from the students, they just to pay charges to the Home Teacher or Home Tutor Visiting their Home.We charge very reasonable price from students and also accommodate the students who cannot pay the tuition fee.We also give the service of test preparation of NUST & MCAT and other test that are famous.</p>
<p>Except this we also give opportunity of courses like Web Development,ASP.Net,C#,English Language,Ilets,Computer Application & Office professional,Graphic Designing(Corel Draw,inpage,Adobe Photoshop) and all other IT related course.
                    </p>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="clear">
    </div>
    <div id="social" class="cont_maron">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 text-center">
                    <div class="pad-30">
                    </div>
                    <div class="mt-30">
                        <img src="images/services/ico_marketing_big.png"></div>
                </div>
                <div class="col-lg-9">
                    <h1>
                        SOCIAL MEDIA MARKETING</h1>
                    <p>
                        Social media has become a platform that is easily accessible to anyone with internet access. 
			We provide very cheap and solvefull ideas 		
                        of our customers in community by applying different social media marketing and advertising
                        techniques to give their business maximum exposure. Our policy is to take all the
                        pain of internet marketing from our clients so that they can focus on products and
                        services. Our social marketing techniques are not limited to get followers on social
                        media websites, we use a blend of SEO (Search engine Optimization) techniques, social
                        websites presence, video marketing and lots of other interesting and engaging techniques.
                    </p>
                    <p>
                        We assist our clients to devise successful internet marketing strategies to give
                        a boost to your business voice and reach the intended audience to increase sales.</p>
                </div>
            </div>
        </div>
    </div>
	
		
   <?php include"includes/footer.php"?>
   
      <!-- Add content to the popup -->
    <div id="my_popup" class="contact_box">
        <h3>
            Contact Us</h3>
        <p>
            You have any question? Need a free quotation? Have a suggestion or Just want to
            say hello. Contact Us, We like to hear from you.
        </p>
        <form class="form-horizontal" role="form" method="post" action="contact.php">
        <fieldset class="mb-15">
            <label for="name" class="col-sm-3 control-label">
                Name</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="name" name="fname" placeholder="Name">
            </div>
        </fieldset>
        <fieldset class="mb-15">
            <label for="email" class="col-sm-3 control-label">
                Email</label>
            <div class="col-sm-9">
                <input type="email" name="email" class="form-control" id="email" placeholder="Email">
            </div>
        </fieldset>
        <fieldset class="mb-15">
            <label for="phone" class="col-sm-3 control-label">
                Phone No</label>
            <div class="col-sm-9">
                <input type="number" class="form-control" name="phone" id="phone" placeholder="XXX">
            </div>
        </fieldset>
        <fieldset class="mb-15">
            <label for="message" class="col-sm-3 control-label">
                Message</label>
            <div class="col-sm-9">
                <textarea class="form-control" name="message" rows="6"></textarea>
            </div>
        </fieldset>
        <fieldset class="mb-15">
            <label class="col-sm-3">
                &nbsp;</label>
            <div class="col-sm-9">
                <button type="submit" name="submit" class="btn btn-primary">
                    Submit</button>
                &nbsp;
                <button type="submit" class="btn btn-default">
                    Reset</button>
            </div>
        </fieldset>
        </form>
        <!-- Add an optional button to close the popup -->
        <button class="my_popup_close">
            Close</button>
    </div>
	
	
	
    <a href="#" class="contact_button my_popup_open">
        <img src="images/ico_contact.png"></a>
		
		
		<a href="#" class="scrollup">Scroll</a>
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <!-- Include jQuery Popup Overlay -->
    <script src="js/jquery.popupoverlay.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#my_popup').popup();

            $(".scrolll a").click(function (e) {
                scroll_to($(this).attr("href"));
                e.preventDefault();
            });

            //Group1 => PageLink
            $(".hi-icon").click(function (e) {
                scroll_to($(this).attr("href"));
                e.preventDefault();
            });

            function scroll_to(id) {
                var offset = $(id).offset();
                $('html, body').animate({ scrollTop: (offset.top - 96) }, 1500);
            }
        });

        $(window).scroll(function () {
            if ($(this).scrollTop() > 200) {
                $('.scrollup').fadeIn();
                //alert("fadeIn");
            } else {
                //alert("fadeout");
                $('.scrollup').fadeOut();
            }
        });

        $('.scrollup').click(function () {
            $("html, body").animate({ scrollTop: 0 }, 500);
            //alert("clicked");
            return false;
        });

        var hash = window.location.hash,
		current = 0,
		demos = Array.prototype.slice.call(document.querySelectorAll('#codrops-demos > a'));

        if (hash === '') hash = '#set-1';
        setDemo(demos[parseInt(hash.match(/#set-(\d+)/)[1]) - 1]);

        demos.forEach(function (el, i) {
            el.addEventListener('click', function () { setDemo(this); });
        });

        function setDemo(el) {
            var idx = demos.indexOf(el);
            if (current !== idx) {
                var currentDemo = demos[current];
                currentDemo.className = currentDemo.className.replace(new RegExp("(^|\\s+)" + 'current-demo' + "(\\s+|$)"), ' ');
            }
            current = idx;
            el.className = 'current-demo';
        }
    </script>
</body>
</html>