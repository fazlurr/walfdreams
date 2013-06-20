<?php
	if (!isset($_POST['aroma'])) {
		$not_set = true;
	}
	else {
		$product = $_POST['product-name'];
		$email = $_POST['email'];
		$aroma = $_POST['aroma'];
		$jumlah = $_POST['jumlah'];
		$kota = $_POST['kota'];
		$satuan = 149000;
		$total = (($satuan + $kota) * $jumlah);
		$not_set = false;
		//Send Email Address to confirm@walfdreams.com
		$to = "confirm@walfdreams.com";
		$subject = "I Want to Buy " . $product . "!";
		$linkGambar = "http://walfdreams.com/assets/img/logo-small.png";
		//Email Header
		$headers = "From: " . strip_tags($email) . "\r\n";
		$headers .= "Reply-To: ". strip_tags($email) . "\r\n";
		//$headers .= "CC: susan@example.com\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		//Email Content
		$message = '<html><body>';
		$message .= '<img src="' . $linkGambar . '" alt="Website Change Request" />';
		$message .= '<table rules="all" style="border-color: #77312F;" cellpadding="10">';
		$message .= "<tr style='color: #FAF1DA; background: #77312F;'><td><strong>Product:</strong> </td><td>" . strip_tags($product) . "</td></tr>";
		$message .= "<tr><td><strong>Aroma:</strong> </td><td>" . strip_tags($aroma) . "</td></tr>";
		$message .= "<tr><td><strong>Amount:</strong> </td><td>" . strip_tags($jumlah) . "</td></tr>";
		$message .= "<tr><td><strong>City:</strong> </td><td>" . strip_tags($kota) . "</td></tr>";
		$message .= "<tr><td><strong>Total Price:</strong> </td><td>" . strip_tags($total) . "</td></tr>";
		$message .= "</table>";
		$message .= "</body></html>";
		//Kirim Emailnya
		mail($to,$subject,$message,$headers);
	}

	include_once('init.php');
	$title = 'Walfdreams | Confirm';
	get_html_header($title);
	get_html_navbar();
?>
<!--Content-->
<div class="down">
	<div class="jumbotron">
		<div class="container">
			<h1>Payment Details</h1>
		</div>
	</div>
	<div class="container confirm-box" style="max-width: 1070px;">
		<div class="row-fluid">
			<div class="span4 thumbnail confirm-box" style="border:1px solid #8E7B66;">
				<h3>Your Recent Transaction :</h3>
				<?php if($not_set==true){ echo "<h4>No Transaction Found.</h4>"; }
					else { echo "<h4><p>" . $product . " " . $aroma . " " . $jumlah . "Buah </p>
						<p>Shipping : " . $kota . "</p><p>Total : Rp" . $total; }
				?>
			</div>
  			<div class="span4 dashed-border">
  				<h3>Payment Confirmation
  				<h4>
				<p>Please email us at confirm@walfdreams.com :</p>
				<p>- Your Name </p>
				<p>- Your Address </p>
				<p>- Your Phone Number </p>
				<p>- Money Transferred </p>
				<p>- Bank Account Holder's Name </p>
				<p>- Transfer Receipt </p>
				</h4>
  			</div>
  			<div class="span4 dashed-border">
  				<h4>
  				<p>Example : </p>
  				<p>- Walf Brun </p>
  				<p>- Jl. Road No.99 Jakarta Barat 15310</p>
  				<p>- +628xxxxx </p>
  				<p>- Rp155000 </p>
  				<p>- Walf Brun </p>
  				<p>- *Picture of Transfer Receipt </p>
  				</h4>
  			</div>
		</div>
	</div>
</div>
<?php
	get_html_footer();
	get_html_closing();
?>