<?php
	//Send Email Address to confirm@walfdreams.com
	$to = "confirm@walfdreams.com";
	$subject = "I Want to Adopt " . $product . "!";
	$linkGambar = "http://walfdreams.com/assets/img/logo-small.png";
	//Email Header
	$headers = "From: " . $email . "\r\n";
	$headers .= "Reply-To: ". $email . "\r\n";
	//$headers .= "CC: susan@example.com\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	//Email Content
	$message = '<html><body>';
	$message .= '<img src="' . $linkGambar . '" alt="Website Change Request" />';
	$message .= '<table rules="all" style="border-color: #662A28;" cellpadding="10" width="100%">';
	$message .= "<tr style='color: #FAF1DA; background: #77312F;'><td width='40%'><strong>Character :</strong> </td><td>" . $product . "</td></tr>";
	$message .= "<tr><td>Aroma : </td><td>" . $aroma . "</td></tr>";
	$message .= "<tr><td>Amount : </td><td>" . $jumlah . "</td></tr>";
	$message2 .= "<tr><td>Price : </td><td>" . $harga . "</td></tr>";
	$message .= "<tr><td>Shipping : </td><td>" . $shipping . "</td></tr>";
	$message .= "<tr><td><strong>Total Price :</strong> </td><td>" . $total . "</td></tr>";
	$message .= "</table>";
	$message .= "</body></html>";
	//Kirim Emailnya ke Server
	mail($to,$subject,$message,$headers);

	//Kirim ke Pembeli
	$to2 = $email;
	$subject2 = $product . " Adoption Confirmation";
	$linkGambar = "http://walfdreams.com/assets/img/logo-small.png";
	//Email Header
	$headers2 = "From: confirm@walfdreams.com";
	$headers2 .= "Reply-To: confirm@walfdreams.com";
	//$headers .= "CC: susan@example.com\r\n";
	$headers2 .= "MIME-Version: 1.0\r\n";
	$headers2 .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	//Email Content
	$message2 = '<html><body>';
	$message2 .= '<img src="' . $linkGambar . '" alt="Website Change Request" />';
	$message2 .= '<br>Dear ' . $nama;
	$message2 .= '<br>Thank you so much for adopting Walfdreams character! Here is your adoption confirmation :';
	$message2 .= '<table rules="all" style="border-color: #662A28;" cellpadding="10" width="100%">';
	$message2 .= "<tr style='color: #FAF1DA; background: #77312F;'><td width='40%''><strong>Character :</strong> </td><td>" . $product . "</td></tr>";
	$message2 .= "<tr><td>Aroma : </td><td>" . $aroma . "</td></tr>";
	$message2 .= "<tr><td>Amount : </td><td>" . $jumlah . "</td></tr>";
	$message2 .= "<tr><td>Price : </td><td>" . $harga . "</td></tr>";
	$message2 .= "<tr><td>Shipping : </td><td>" . $shipping . "</td></tr>";
	$message2 .= "<tr><td><strong>Total Price : </strong></td><td>" . $total . "</td></tr>";
	$message2 .= "</table>";
	$message .= "<br>Please transfer the amount of total price to:<br>(BCA)<br>After the transaction is done, please send confirmation email by replying to this message:<br>-Your Name<br>-Your Adresses<br>-Your Phone Number<br>Money Transferred<br>-Transfer Receipt (photo)";
	$message2 .= "</body></html>";
	//Kirim Emailnya ke Server
	mail($to2,$subject2,$message2,$headers2);
?>