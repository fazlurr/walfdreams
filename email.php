<?php
	$email = $_POST['email'];
	$nama = $_POST['name'];
	$message = $_POST['message'];
	$to = "confirm@walfdreams.com";
	$subject = "Contact Us Walfdreams";
	$from = $email;
	$headers = "From:" . $from . $nama;
	mail($to,$subject,$message,$headers);
	header('Location: contact.php');
?>