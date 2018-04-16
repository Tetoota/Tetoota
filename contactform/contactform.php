<?php 
include('../config.php');
if(isset($_POST['submit'])){
	$email = $_POST['email'];
	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	echo mysqli_query($conn,"INSERT INTO tt_contact_us(`email`,`name`,`subject`,`message`) VALUES('$email','$name','$subject','$message')");
	//header('Location: index.html');
}

/*
if(isset($_POST)) {

  $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL); 
	
  if($email){ 
	  
	
    // the message
 $msg =$_POST['message'];
 $subject =$_POST['subject'];
	  
 $to = "jeshwanth.anumandla@outlook.com";	  
 $from = $_POST['email']; // a valid address on your domain

	  
	  
 $message = 'From: ' . $_POST['name'] . "\r\n\r\n";
 $message .= wordwrap($msg,70);;	
 $headers = "From: $from\r\nReply-to: $email";
// send email
 $isMailSent = mail($to,$subject,$message,$headers) ? 'OK' : 'FALSE';
echo $isMailSent;
  } else {
  
  echo 'Email is not a valid email';
  }	

  
}
*/
?>
