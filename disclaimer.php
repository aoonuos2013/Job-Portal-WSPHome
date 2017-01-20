<!DOCTYPE html>
<?php
include("db.php");

?>


<html lang="en">
<head>
<link rel="icon" href="fav.png" type="image/png" sizes="16x16">

<style type="text/css">

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
    <title>World Solution Provider - Latest Jobs - News & All IT Solution</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/wsphome.css" rel="stylesheet">
    <link href="css/jobtable.css" rel="stylesheet">
   
    <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>

    <?php include"includes/header.php"?>
    <div class="clear">
    </div>
    <div class="clear pad-10">
    </div>
    <div class="container">
        <div class="row text-left" style="width: 900px;
    font-size: large;
    font-weight: bold;margin-left: 140px">
		<div class="col-sm-12">
            <h6 class="text_grey">
                <a href="index.php">Home</a> <span>» Disclaimer</span></h6>
            <h2 style="font-weight: bold;color: brown;">Disclaimer</h2>
			<p>
                
				

				This site is created, updated and maintained self-sufficient by webmasters at <a href="www.wsphome.com">wsphome.com</a>. All placate on this site is the copyright of <a href="www.wsphome.com">wsphome.com</a></p>

				<p>The information accommodated in this Web site is deliberate solely to provide basic information for the personal use of the reader, who accepts full authority for its use. <a href="www.wsphome.com">wsphome.com</a> does not represent or authenticate the accuracy or authenticity of any information, including content or advertisements (collectively, the “materials”) based on, dispensed through, or linked, downloaded or accessed from any of the services based on this web site, or the caliber of any products, information or other materials displayed, or obtained by you as a result of an placard or any other information or offer in or in relation with the service.</p>

				<p>We accept no responsibility for any mistakes or exclusion, or for the results based from the use of this information. All information in this site is given “as is,” and “as accessible” with no covenant of completeness, accuracy, and opportunity or of the results based from the use of this information, and without assurance of any kind, express or implicit, including, but not limited to warranties of representation, merchantability and fitness for a particular purpose. Nothing herein shall to any extent substitute for the independent exploration and the sound technical and business perception of the reader.</p>
				<p>
				In no event shall <a href="www.wsphome.com">wsphome.com</a> be responsible for any direct, indirect, subordinate, penitentiary, or collateral damages of any kind whatsoever with respect to the service, the materials and the products. Users of this site must hereby admire that any dependence upon any stuff shall be at their sole risk.<p>
				<p>
				The information bestowed here has been compose  from genuine media services and other publicly aired and published mediums by the editors at <a href="www.wsphome.com">wsphome.com</a>. <a href="www.wsphome.com">wsphome.com</a> esteems these mediums and is in no way trying to violation on the honorable   copyrights or businesses of these companies.</p>

				<p><a href="www.wsphome.com">wsphome.com</a> does not definitely subscribe to the views expressed here. If someone’s religious or personal feelings are maltreat due to opinions expressed on <a href="www.wsphome.com">wsphome.com</a> it is purely unintentional and unpremeditated   

				<a href="www.wsphome.com">wsphome.com</a> keeps the right, in its sole circumspection and without any responsibility, to make betterments to, or rectify any error or omissions in any portion of the service or the stuff. No information based herein can be used for re-publishing and division without taking written authorization from <a href="www.wsphome.com">wsphome.com</a>

            </p>
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
