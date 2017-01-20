<?php
include("db.php");
$wq=null;
if(isset($_POST['login']))
{
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$phone = $_POST['phone'];
	//$objective = $_POST['objective'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$country = $_POST['country'];
	$dob = $_POST['dob'];
	$skill = $_POST['skill'];
	$gender = $_POST['gender'];
	
	
		mysql_query("insert into users(name,email,password,phone,address,city,country,dob,skill,gender,status) values('$name','$email','$password','$phone','$address','$country','$city','$dob','$skill','$gender','1')");
		$message = "Your Registration Complete Successfully Now You Are LogIn";
                echo "<script type='text/javascript'>alert('$message');</script>";
		
		}




?>
<html lang="en">
<head>
<title>Latest Jobs - Latest News & All IT Solution - Tutorials,Videos,Awnsers Availble on World Solution Provider</title>
	<?php include'metatag.php'; ?>
<link rel="icon" href="fav.png" type="image/png" sizes="16x16">


   
   <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/wsphome.css" rel="stylesheet">
   
    <link rel="shortcut icon" href="images/favicon.png" />
   
   
   
   
	<style>
	body, div, dl, dt, dd, ul, ol, li, h1, h2, h3, h4, h5, h6, 
pre, form, fieldset, input, textarea, p, blockquote, th, td { 
  padding:0;
  margin:0;}

fieldset, img {border:0}

ol, ul, li {list-style:none}

:focus {outline:none}



p {
  font-size: 12px;
  width: 150px;
  display: inline-block;
  margin-left: 18px;
}
h1 {
  font-size: 32px;
  font-weight: 300;
  color: #4c4c4c;
  text-align: center;
  padding-top: 10px;
  margin-bottom: 10px;
}

html{
  background-color: #ffffff;
}

.testbox {
  margin: 20px auto;
  width: 615px; 
  height: 605px; 
  -webkit-border-radius: 8px/7px; 
  -moz-border-radius: 8px/7px; 
  border-radius: 8px/7px; 
  background-color: #ebebeb; 
  -webkit-box-shadow: 1px 2px 5px rgba(0,0,0,.31); 
  -moz-box-shadow: 1px 2px 5px rgba(0,0,0,.31); 
  box-shadow: 1px 2px 5px rgba(0,0,0,.31); 
  border: solid 1px #cbc9c9;
}

input[type=radio] {
  visibility: hidden;
}

form{
  margin: 0 30px;
}

label.radio {
	cursor: pointer;
  text-indent: 35px;
  overflow: visible;
  display: inline-block;
  position: relative;
  margin-bottom: 15px;
}

label.radio:before {
  background:#425fca;
  content:'';
  position: absolute;
  top:2px;
  left: 0;
  width: 20px;
  height: 20px;
  border-radius: 100%;
}

label.radio:after {
	opacity: 0;
	content: '';
	position: absolute;
	width: 0.5em;
	height: 0.25em;
	background: transparent;
	top: 7.5px;
	left: 4.5px;
	border: 3px solid #ffffff;
	border-top: none;
	border-right: none;

	-webkit-transform: rotate(-45deg);
	-moz-transform: rotate(-45deg);
	-o-transform: rotate(-45deg);
	-ms-transform: rotate(-45deg);
	transform: rotate(-45deg);
}

input[type=radio]:checked + label:after {
	opacity: 1;
}

hr{
  color: #a9a9a9;
  opacity: 0.3;
}

input[type=text],input[type=password]{
  width: 200px; 
  height: 35px; 
  -webkit-border-radius: 0px 4px 4px 0px/5px 5px 4px 4px; 
  -moz-border-radius: 0px 4px 4px 0px/0px 0px 4px 4px; 
  border-radius: 0px 4px 4px 0px/5px 5px 4px 4px; 
  background-color: #fff; 
  -webkit-box-shadow: 1px 2px 5px rgba(0,0,0,.09); 
  -moz-box-shadow: 1px 2px 5px rgba(0,0,0,.09); 
  box-shadow: 1px 2px 5px rgba(0,0,0,.09); 
  border: solid 1px #cbc9c9;
  margin-left: -5px;
  margin-top: 13px; 
  padding-left: 10px;
}

input[type=password]{
  margin-bottom: 25px;
}

#icon {
  display: inline-block;
  width: 40px;
  background-color:#425fca;
  padding: 8px 0px 8px 15px;
  margin-left: 15px;
  -webkit-border-radius: 4px 0px 0px 4px; 
  -moz-border-radius: 4px 0px 0px 4px; 
  border-radius: 4px 0px 0px 4px;
  color: white;
  -webkit-box-shadow: 1px 2px 5px rgba(0,0,0,.09);
  -moz-box-shadow: 1px 2px 5px rgba(0,0,0,.09); 
  box-shadow: 1px 2px 5px rgba(0,0,0,.09); 
  border: solid 0px #cbc9c9;
}

.gender {
  margin-left: 30px;
  margin-bottom: 30px;
}

.accounttype{
  margin-left: 8px;
  margin-top: 20px;
}

a.button {
  font-size: 14px;
  font-weight: 600;
  color: white;
  padding: 6px 25px 0px 20px;
  margin: 10px 8px 20px 0px;
  display: inline-block;
  float: right;
  text-decoration: none;
  width: 50px; height: 27px; 
  -webkit-border-radius: 5px; 
  -moz-border-radius: 5px; 
  border-radius: 5px; 
  background-color: #3a57af; 
  -webkit-box-shadow: 0 3px rgba(58,87,175,.75); 
  -moz-box-shadow: 0 3px rgba(58,87,175,.75); 
  box-shadow: 0 3px rgba(58,87,175,.75);
  transition: all 0.1s linear 0s; 
  top: 0px;
  position: relative;
}

a.button:hover {
  top: 3px;
  background-color:#2e458b;
  -webkit-box-shadow: none; 
  -moz-box-shadow: none; 
  box-shadow: none;
  
}



	</style>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
<link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
	</head>
<body>
<?php include_once("includes/analyticstracking.php") ?>
<?php include"includes/header.php"?>
<div class="testbox">
  <h1>Registration</h1>

  <form action="reg.php" method="post">
      <hr>
   <!-- <div class="accounttype">
      <input type="radio" value="None" id="radioOne" name="account" checked/>
      <label for="radioOne" class="radio" chec>Personal</label>
      <input type="radio" value="None" id="radioTwo" name="account" />
      <label for="radioTwo" class="radio">Company</label>
    </div>
 -->
  <label id="icon" for="name"><i class="icon-user "></i></label>
  <input type="text" name="name" id="name" placeholder="Name" required/>
  
  <label id="icon" for="name"><i class="icon-envelope"></i></label>
  <input type="text" name="email" id="name" placeholder="Email"  pattern="/^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/" required/>
  
  <label id="icon" for="name"><i class="icon-shield"></i></label>
  <input type="password" name="password" id="name" placeholder="Password" required/>
 
	<label id="icon" for="name"><i class="icon-phone"></i></label>
	<input type="text" name="phone" id="name" placeholder="Cell Phone" required/>
	
	<!--<label id="icon" for="name"><i class="icon-briefcase"></i></label>
	<input type="text" name="objective" id="name" placeholder="Enter Objective Summery in short" style="width:457px;" required/>-->
	
	<label id="icon" for="name"><i class="icon-map-marker"></i></label>
	<input type="text" name="address" id="name" placeholder="Enter Your Complete Address" style="width:457px;" required/>
	
	<label id="icon" for="name"><i class="icon-map-marker"></i></label>
	<input type="text" name="country" id="name" placeholder="Enter Country" required/>
	
	<label id="icon" for="name"><i class="icon-map-marker"></i></label>
	<input type="text" name="city" id="name" placeholder="Enter City" required/>
	
	<label id="icon" for="name"><i class="icon-calendar"></i></label>
	<input type="date" name="dob" id="name" placeholder="Enter Date of Birth" style="width:195px" required/>
	
	<label id="icon" for="name"><i class="icon-briefcase"></i></label>
	<input type="text" name="skill" id="name" placeholder="Enter Your Speciality" required/>
	<hr>
	<div class="gender">
    <input type="radio" value="male" id="male" name="gender" checked/>
    <label for="male" class="radio" chec>Male</label>
    <input type="radio" value="female" id="female" name="gender" />
    <label for="female" class="radio">Female</label>
   </div> 
   <p>By clicking Register, you agree on our <a href="#">terms and condition</a>.</p>
  
   <input name="login" type="submit" value="Register" class="btn btn-lg btn-primary" style="float: right;"/>
   <input  type="submit" value="Login" onClick="location.href='index.php#login'" style="float: right;margin-right:60px;border:#425fca;background-color:#425fca;" class="btn btn-lg btn-primary"/>

   </form>
   <?php echo $wq; ?>
</div>

       <div class="copyright-section">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <p style="width: initial;">
                Copyright &copy; 2015 WSPHome - Designed & Developed by 
                <a href="http://wsphome.com">
                World Solution Provider Home
                </a>
              </p>
            </div>
          </div>
        
        </div>
      </div>
    
    
    
	</body>
	</html>
