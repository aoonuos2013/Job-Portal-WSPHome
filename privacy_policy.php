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
        <div class="row text-left" style="width: 900px;
    font-size: large;
    font-weight: bold;margin-left: 140px">
		<div class="col-sm-12">
            <h6 class="text_grey">
                <a href="index.php">Home</a> <span>» Privacy Policy</span></h6>
            <h2 style="font-weight: bold;color: brown;">Privacy Policy</h2>
			<p>
                
				Securing your private privacy is very necessary to us, <a href="www.wsphome.com">wsphome.com</a> accumulate no personal information about you other than that which you choose to gives when you have questions or need help with a specific issue.</p>

				<p><a href="www.wsphome.com">wsphome.com</a> has links to other worthful sites on the Internet, <a href="www.wsphome.com">wsphome.com</a> is not responsible for the Seclusion practices or the content of such Web sites.</p>

				<p>Our server logs are helpful for administration objective only and not shared with or accessible to any outside medium. No individual recognizing or personal information (such as your name) is automatically collected when you visit Any Page of <a href="www.wsphome.com">wsphome.com</a>.</p>

				<p><a href="www.wsphome.com">wsphome.com</a> has an online web form which you can use to contact us with questions on issues or queries, We use this information only to contact you about the matter of interest and to provide casework intervention.</p>
</br>			<p>
				You have any question or complain? Need a free quotation? Have a suggestion or Just want to say hello. Contact Us, We like to hear from you.<a href="#" class="my_popup_open">Click here</a> to Contact with us.
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
