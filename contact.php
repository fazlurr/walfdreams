<?php
	include_once('init.php');
	if($_POST){
		$email = $_POST['email'];
		$nama = $_POST['name'];
		$pesan = $_POST['message'];
		$to = "confirm@walfdreams.com";
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
		$message .= '<img src="' . $linkGambar . '" alt="Website Change Request" />';
		$message .= '<table rules="all" style="color: #fff; border-color: #77312F;" cellpadding="10">';
		$message .= "<tr style='background: #77312F;'><td><strong>Name:</strong></td><td><strong>Message:</strong></td><tr>";
		$message .= "<tr><td>" . strip_tags($nama) . "</td><td>" . strip_tags($pesan) . "</td></tr>";
		$message .= "</table>";
		$message .= "</body></html>";
		//Kirim Emailnya
		if(mail($to,$subject,$message,$headers)) {
			echo "<script>alert('Message Sent :D!');</script>";
		}
		else { echo "<script>alert('Message not sent, please try later :(!');</script>"; }
	}
	$title = 'Walfdreams | Contact';
	get_html_header($title);
	get_html_navbar();
?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=134781766629888";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="down">
	<div class="container center">
		<br><br><br>
		<div class="row-fluid">
			<div class="span4"><center><img src="assets/img/logo.png"></center></div>
			<div class="span8">
				<h1>Contact Us</h1>
				<div class="ribbon-stitches"></div>
				<div class="row-fluid" id="contact-us">
					<div class="span4">	
						<form method="post" action="">
							<p><input type="email" name="email" placeholder="Your Email"></p>
							<p><input type="text" name="name" placeholder="Your Name"></p>
							<p><textarea name="message" rows="3" placeholder="Message"></textarea></p>
							<button type="submit" class="btn btn-large"><i class="icon-envelope"></i> Send</button>
						</form>
					</div>
					<div class="span8">
						<p><h3>Like Our Facebook : </h3>
							<div class="fb-like" data-href="http://www.facebook.com/Walfdreams" data-send="true" data-width="450" data-show-faces="true"></div>
						</p>
						<p><h3>Follow Our Twitter : </h3>
							<a href="https://twitter.com/WalfDreams" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @WalfDreams</a>
							<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
						</p>
						
							<a class="btn btn-large" href="http://www.facebook.com/walfdreams"><i class="icon-facebook"></i> Walfdreams</a>
							<a class="btn btn-large" href="http://www.twitter.com/walfdreams"><i class="icon-twitter"></i> @walfdreams</a>
						
					</div>
				</div>
			</div>
		</div><!--row-fluid-->
	</div>
</div>
<?php
	get_html_footer();
	get_html_closing();
?>