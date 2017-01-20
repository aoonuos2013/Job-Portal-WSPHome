<!DOCTYPE html>
<?php
include("db.php");
if(isset($_GET["cat"]))

{$cat=$_GET["cat"];}
?>



<html lang="en">
<head>
<title>Latest Jobs - Latest News & All IT Solution - Tutorials,Videos,Awnsers Availble on World Solution Provider</title>
	<?php include'metatag.php'; ?>
<link rel="icon" href="fav.png" type="image/png" sizes="16x16">
<!--popup style-->	
<style>
input[type="text"], input[type="password"] {
background-color: rgba(238, 163, 3, 0.39);
border: none;
border-radius: 3px;
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
color: #5a5656;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
font-size: 14px;
height: 30px;
margin-top:10px;
margin-bottom:10px;
outline: none;
padding: 0px 10px;
width: 300px;
-webkit-appearance:none;
}

h1 {
  text-align: center;
  font-family: Tahoma, Arial, sans-serif;
  color: #06D85F;
  margin: 80px 0;
}

.box {
  width: 40%;
  margin: 0 auto;
  background: rgba(255,255,255,0.2);
  padding: 35px;
  border: 2px solid #fff;
  border-radius: 20px/50px;
  background-clip: padding-box;
  text-align: center;
}


.overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 500ms;
  display:none;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}

.popup {
  margin: 70px auto;
  padding: 20px;
  background: #fff;
  border-radius: 5px;
  width: 30%;
  height:65%;
  position: relative;
  transition: all 5s ease-in-out;
  text-align: center;
}

.popup h2 {
  margin-top: 0;
  color: #333;
  font-family: Tahoma, Arial, sans-serif;
}
.popup .close {
  position: absolute;
  top: -5px;
  right: 12px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
  cursor: pointer;
}
.popup .close:hover {
  color: #06D85F;
}
.popup .content {
  max-height: 30%;
}

@media screen and (max-width: 700px){
  .box{
    width: 70%;
  }
  .popup{
    width: 70%;
  }
}
	</style>

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
<style>
	p{ 
	font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
    font-size: 14px;
	font-weight:100;
	}
a:hover { text-decoration:none; }
.btn1
{
    transition: all .2s linear;
    -webkit-transition: all .2s linear;
    -moz-transition: all .2s linear;
    -o-transition: all .2s linear;
}
.btn1-read-more
{
    padding: 5px;
    text-align: center;
    border-radius: 0px;
    display: inline-block;
    border: 2px solid #662D91;
    text-decoration: none;
    text-transform: uppercase;
    font-weight: bold;
    font-size: 12px;
    color:#662D91;
}

.btn1-read-more:hover
{
    color: #FFF;
    background: #662D91;
}
.post { border-bottom:1px solid #DDD }
.post-title {  color:#662D91; }
.post .glyphicon { margin-right:5px; }
.post-header-line { border-top:1px solid #DDD;border-bottom:1px solid #DDD;padding:5px 0px 5px 15px;font-size: 12px; }
.post-content { padding-bottom: 15px;padding-top: 15px;}

</style>
   
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/wsphome.css" rel="stylesheet">
    <link href="css/jobtable.css" rel="stylesheet">
   
    <link rel="shortcut icon" href="images/favicon.png" />
	<script type="text/javascript">

function rr(vv)
{
var com=vv.value;
			   //alert(com);
			   $('#popup1').show();
			   $('input[name="company_email"]').val(com);
}
function rr2()
{
			   $('#popup1').hide();
			  
}	  


      WebFontConfig = {
        google: {
          families: ['Open+Sans:300,400,700:latin', 'Lato:700,900:latin']
        }
      };
      (function() {
        var wf = document.createElement('script');
        wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
          '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
        wf.type = 'text/javascript';
        wf.async = 'true';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(wf, s);
      })();
    </script>
</head>
<body>

<?php include_once("includes/analyticstracking.php") ?>
    <?php include"includes/header.php"?>
    <div class="clear">
    </div>
    <div class="clear pad-10">
    </div>
	<!--nav sidebar -->
<?php include"tuts_nav.php"?>

<div class="main">
</div>
    <div class="container">
	
	
	<?php $res=mysql_query("SELECT * from child_cat WHERE pid=$cat");
	
		
?>
 


        <div class="row text-left" style="width: 900px;
    font-size: large;
    font-weight: 100;margin-left: 200px">
	
		<div class="col-sm-12">
            <h6 class="text_grey">
                <a href="index.php" style="margin-left:-35px;">Home</a> <span>» Programming Tutorials</span></h6>
						<h2 style="margin-left:-35px; font-weight: bold;color:#425fca;"> PHP  <span style="font-size:25px;"> ( Solutions & Codes Example ) </span></h2>
				
				 <?php
				while($row=mysql_fetch_array($res))
						{?>
					
                <div class="col-md-12 post">
                    <div class="row">
                        <div class="col-md-12">
                            <h5 style="font-size:font-size:18px;">
                                <strong><a href="" class="post-title"><?php echo $row['title']; ?></a></strong></h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 post-header-line">
                            <span class="glyphicon glyphicon-user"></span>by <a href="#">Bhaumik</a> | <span class="glyphicon glyphicon-calendar">
                            </span><?php $datex = $row['pdate'];
 
								echo $datenew=date('Y-m-d',strtotime($datex));

							?> | <span class="glyphicon glyphicon-comment"></span><a href="#">
                                3 Comments</a> | <i class="icon-share"></i><a href="#">39 Shares</a> | <span class="glyphicon glyphicon-tags">
                                </span>Tags : <a href="#"><span class="label label-info">Snipp</span></a> <a href="#">
                                    <span class="label label-info">Bootstrap</span></a> <a href="#"><span class="label label-info">
                                        UI</span></a> <a href="#"><span class="label label-info">growth</span></a>
                        </div>
                    </div>
                    <div class="row post-content">
                        <div class="col-md-3">
                            <a href="#">
                                <img src="http://4.bp.blogspot.com/-_lqoNpVXeU4/UkxQ7N-QW8I/AAAAAAAACTw/pni-TZyp17o/s1600/cool+share+button+effects+styles.png" alt="" class="img-responsive">
                            </a>
                        </div>
                        <div class="col-md-9">
                            <p>
                               <?php echo htmlentities( $row['description'] ); ?>
                            </p>
                            <p>
                                <a class="btn1 btn1-read-more" href="#">Read more</a>
								
                                <a class="btn1 btn1-read-more" value='<?php echo $row['companyemail'];?>' onClick="rr(this);" href="#popup1" style="float:right;">Add a Comment</a></p>
                        </div>
                    </div>
                </div>
					<?php } ?>	
				
				
				
				
			
			</div>
	
			
        </div>
	
	
    </div>
    
    
    
		
   <?php include"includes/footer.php"?>
<!--Comment Popup-->  
  <div id="popup1" class="overlay">
	<div class="popup">
                 <a class="close" onclick='rr2()'>&times;</a>
		<p style="color:brown;margin-bottom: 15px; margin-top:5px;text-align:center;">Please Register First OR IF You Have Already Register You Must Login To earn extra privileges like posting,commenting,and voting.</p>
		
		<div class="content">
		
		<input type="submit" class="btn1 btn1-read-more" onClick="location.href='../reg.php'" value="Register Here"> 
        <input type="submit" class="btn1 btn1-read-more"  onClick="location.href='../index.php#login'" value="Login Here">
								
		</div>
	</div>
</div>

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
