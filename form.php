

<?php

if(isset($_POST['submit']))
{
$name = $_POST['name'];
$email = $_POST['email'];
$to = $email;



$subject = "wsphome.com";

$message = '<html><body>';
$message .= '<h2>'.$message1.'</h2>';
$message .= '<img src="http://wsphome.com/images/wsphome_logo.png" />';
$message .= "<br>";
$message .=  'This is from contact us page of wsphome sender email is='.$email.'and name='.$name;
$message .= '</body></html>';





// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <support@wsphome.com>' . "\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";
$msg = wordwrap($message,15);
mail($to,$subject,$msg,$headers);

echo "mail send";
//header('location:profile/profile.php');
}
?>
<html
<body>



<h2>Sample Form</h2>

<form action="form.php" role="form.php" method="post">

  <div class="container">
    <label><b>name</b></label>
    <input type="text" placeholder="" name="name" required><br><br>

    <label><b>email</b></label>
    <input type="text" placeholder="" name="email" required><br><br>
        
    <button type="submit" name="submit">signup</button>
    

</form>

</body>
</html>
