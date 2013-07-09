<?php
	$email = $_POST['email'];
	$nama = $_POST['name'];
	$phone = $_POST['phone'];
	$pesan = $_POST['message'];
	$to = "hello@walfdreams.com";
	$subject = "Contact Us Walfdreams";
	$linkGambar = "http://walfdreams.com/assets/img/logo-small.png";
	//Email Header
	$headers = "From: " . strip_tags($email) . "\r\n";
	$headers .= "Reply-To: ". strip_tags($email) . "\r\n";
	//$headers .= "CC: susan@example.com\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	//Email Content
	$message = '<html><body style="width: 100%">';
	$message .= '<img src="' . $linkGambar . '" alt="" />';
	$message .= '<table rules="all" style="color: #fff; border-color: #662A28;" cellpadding="10">';
	$message .= "<tr style='background: #77312F;'><td><strong>Name</strong></td><td>Phone</td><td><strong>Message</strong></td><tr>";
	$message .= "<tr><td>" . $nama . "</td><td>" . $phone . "</td><td>" . $pesan . "</td></tr>";
	$message .= "</table>";
	$message .= "</body></html>";
	mail($to,$subject,$message,$headers);
?>