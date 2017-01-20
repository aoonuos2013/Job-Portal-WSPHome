<!DOCTYPE html>
<?php
include("db.php");


?>


<html lang="en">
<head>
<title>Latest Jobs - Latest News & All IT Solution - Tutorials,Videos,Awnsers Availble on World Solution Provider</title>
	<?php include'metatag.php'; ?>
<link rel="icon" href="fav.png" type="image/png" sizes="16x16">

<style type="text/css">
b,
strong {font-weight:bold; color:#960A0A;font-size: larger;}

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
background-color: #8C0A07;
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
    <div class="clear pad-10">
    </div>
    <div class="container">
         <div class="row text-center" id="services">
            <h1 class="text_blue">
               Free Online Tutorials & Courses</h1>
            <p>
            </p>
            <div class="hi-icon-effect-2 hi-icon-effect-2a">
			<div class="col-lg-2 col-xs-6 text-center" >
                    <a href="tuts_detail.php?cat=2" class="hi-icon network" style="width:170px; height:160px;">
                        <img src="images/tutorial/php.png" alt="" style="width:100px; height:75px; margin-top:45px;" /></a> <b>PHP</b>
                </div>
                <div class="col-lg-2 col-xs-6 text-center" style="margin-left:40px;">
                    <a href="tuts_detail.php?cat=3" class="hi-icon design" style="width:170px; height:160px;">
                        <img src="images/tutorial/xml.png" alt="" style="width:100px; height:75px; margin-top:45px;"/></a> <b>XML</b>
                </div>
                <div class="col-lg-2 col-xs-6 text-center" style="margin-left:40px;">
                    <a href="tuts_detail.php?cat=4" class="hi-icon apps" style="width:170px; height:160px;">
                        <img src="images/tutorial/sql.png" alt="" style="width:100px; height:75px; margin-top:45px;"/></a> <b>SQL</b>
                </div>
                <div class="col-lg-2 col-xs-6 text-center" style="margin-left:40px;">
                    <a href="tuts_detail.php?cat=5" class="hi-icon web" style="width:170px; height:160px;">
                        <img src="images/tutorial/java.png" alt="" style="width:100px; height:75px; margin-top:45px;" /></a> <b>JAVA</b>
                </div>
                <div class="col-lg-2 col-xs-6 text-center" style="margin-left:40px;"s>
                    <a href="tuts_detail.php?cat=6" class="hi-icon solutions" style="width:170px; height:160px;">
                        <img src="images/tutorial/oracl.png" alt="" style="width:100px; height:75px; margin-top:45px;"/></a> <b>ORACLE</b>
                </div>
               
            </div>
			<div class="hi-icon-effect-2 hi-icon-effect-2a">
			
			 <div class="col-lg-2 col-xs-6 text-center" >
                    <a href="tuts_detail.php?cat=7" class="hi-icon apps" style="width:170px;margin-top:50px; height:160px;">
                        <img src="images/tutorial/jq.png" alt="" style="width:100px; height:75px; margin-top:45px;"/></a> <b>J QUERY</b>
                </div>
				
				<div class="col-lg-2 col-xs-6 text-center" style="margin-left:40px;"s>
                    <a href="8" class="hi-icon solutions" style="width:170px; height:160px;margin-top:50px;">
                        <img src="images/tutorial/css.png" alt="" style="width:100px; height:75px; margin-top:45px;"/></a> <b>CSS</b>
                </div>
              
				<div class="col-lg-2 col-xs-6 text-center" style="margin-left:40px;">
                    <a href="9" class="hi-icon web" style="width:170px; height:160px; margin-top:50px;">
                        <img src="images/tutorial/mysql.png" alt="" style="width:100px; height:75px; margin-top:45px;" /></a> <b>MY SQL</b>
                </div>	
				<div class="col-lg-2 col-xs-6 text-center" style="margin-left:40px;">
                    <a href="tuts_detail.php?cat=10" class="hi-icon network" style="width:170px; height:160px;margin-top:50px;">
                        <img src="images/tutorial/csharp.png" alt="" style="width:100px; height:75px; margin-top:45px;" /></a> <b>C Sharp</b>
                </div>
                 <div class="col-lg-2 col-xs-6 text-center" style="margin-left:40px;">
                    <a href="tuts_detail.php?cat=1" class="hi-icon design" style="width:170px;margin-top:50px; height:160px;">
                        <img src="images/tutorial/html.png" alt="" style="width:100px; height:75px; margin-top:45px;"/></a> <b>HTML</b>
                </div>
				
               
            </div>
			<div class="hi-icon-effect-2 hi-icon-effect-2a">
			<div class="col-lg-2 col-xs-6 text-center" >
                    <a href="tuts_detail.php?cat=11" class="hi-icon network" style="width:170px; height:160px;margin-top:50px;">
                        <img src="images/tutorial/js.png" alt="" style="width:100px; height:75px; margin-top:45px;" /></a> <b>Java Script</b>
                </div>
                <div class="col-lg-2 col-xs-6 text-center" style="margin-left:40px;">
                    <a href="tuts_detail.php?cat=12" class="hi-icon design" style="width:170px;margin-top:50px; height:160px;">
                        <img src="images/tutorial/ci.png" alt="" style="width:100px; height:75px; margin-top:45px;"/></a> <b>Codeigniter</b>
                </div>
                <div class="col-lg-2 col-xs-6 text-center" style="margin-left:40px;">
                    <a href="tuts_detail.php?cat=13" class="hi-icon apps" style="width:170px;margin-top:50px; height:160px;">
                        <img src="images/tutorial/asp.gif" alt="" style="width:100px; height:75px; margin-top:45px;"/></a> <b>ASP.NET</b>
                </div>
                <div class="col-lg-2 col-xs-6 text-center" style="margin-left:40px;">
                    <a href="14" class="hi-icon web" style="width:170px; height:160px; margin-top:50px;">
                        <img src="images/tutorial/cpp.png" alt="" style="width:100px; height:75px; margin-top:45px;" /></a> <b>C ++</b>
                </div>
                <div class="col-lg-2 col-xs-6 text-center" style="margin-left:40px;"s>
                    <a href="tuts_detail.php?cat=15" class="hi-icon solutions" style="width:170px; height:160px;margin-top:50px;">
                        <img src="images/tutorial/wp.png" alt="" style="width:100px; height:75px; margin-top:45px;"/></a> <b>WORDPRESS</b>
                </div>
               
            </div>
			<div class="hi-icon-effect-2 hi-icon-effect-2a">
			
                
                <div class="col-lg-2 col-xs-6 text-center" style="margin-left:40px;">
                    <a href="tuts_detail.php?cat=16" class="hi-icon apps" style="width:170px;margin-top:50px; height:160px;">
                        <img src="images/tutorial/asp.gif" alt="" style="width:100px; height:75px; margin-top:45px;"/></a> <b>LARAVEL</b>
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
