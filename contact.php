<?php
if(isset($_POST['submit']))
{
$name = $_POST['fname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message1 = $_POST['message'];

$to = "aoonuos2013@gmail.com";
$subject = "new Message";


$subject = "wsphome.com";
$message = '<html><body>';
$message .= '<h2>'.$message1.'</h2>';
$message .= '<img src="http://wsphome.com/images/wsphome_logo.png" />';
$message .= "<br>";
$message .=  'This is from contact us page of wsphome sender email is='.$email.'and phone number is='.$phone.'and name='.$name;
$message .= '</body></html>';
//$message = '<html><body>';

$message .= "</body></html>";


// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <support@wsphome.com>' . "\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";
$msg = wordwrap($message,70);
mail($to,$subject,$msg,$headers);


header('location:profile/profile.php');
}
?>