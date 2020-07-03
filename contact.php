<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact Me</title>
</head>
<body>
<button><a href="index.html">Back</a></button>

<form class="Contactform" action="contact.php"> 
<h1>Contact form</h1><br>
<label>Your Name:</label>
<input type="text" name="name" value=""><br>
<label>Your Email:</label>
<input type="email" name="email" value=""><br>
<label>Your Message:</label><br>
<textarea name="message" rows="10" cols="30"></textarea><br>
<button>Send Message</button>
</form>
</body>
</html>

<?php
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];

if(empty($name)||empty($email)||empty($message))
{
echo "Please fill all the fields";
}
else
{
mail("raufurrahman7@gmail.com","Website Message",$message , "From: $name <$email>");
echo "<script type='text/javascript'>alert('your message sent successfully');
window.history.log(-1);
<script>";
}
?>
