<?php 
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'tetoota';


$conn = mysqli_connect($host,$username,$password,$dbname);

if(isset($_POST['submit'])){
	$email = $_POST['email'];
	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	echo mysqli_query($conn,"INSERT INTO tt_contact_us(`email`,`name`,`subject`,`message`) VALUES('$email','$name','$subject','$message')");
	header('Location: index.html');
}

?>