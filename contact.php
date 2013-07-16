<?php
	$title = "<title>Walfdreams | Contact Us</title>";
	$desc = '<meta name="description" content="Feel free to email us to stay connected">';
	include('inc/htmlopen.htm');
	echo $title;
	echo $desc;
	include('inc/metas.htm');
	include('inc/css.htm');
	include('inc/headclose.htm');
	include('inc/body.htm');
?>
<!--Fb Like Script-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=134781766629888";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!--Content-->
<div class="down">
	<div class="container center">
		<div class="row-fluid">
			<div class="span4"><center><img src="assets/img/logo.png"></center></div>
			<div class="span8">
				<h1>Contact Us</h1>
				<div class="ribbon-stitches"></div>
				<div class="row-fluid" id="contact-us">
					<div class="span4">	
						<form name="contactform" id="contactform">
							<input type="email" name="email" id="email" placeholder="Email" required>
							<input type="text" name="name" id="name" placeholder="Name" required>
							<input type="text" name="phone" id="phone" placeholder="Phone (Optional)">
							<textarea name="message" rows="3" id="message" placeholder="Message" style="height: 99px" required></textarea>
							<button type="submit" id="send" class="btn btn-large btn-block"><i class="fwicon-envelope"></i> Send</button>
						</form>
						<div id="loading" height="44" style="display: none">
							<center><img src="assets/img/load.gif"></center>
						</div>
						<div id="infobox" class="alert alert-success" style="height: 44px; display: none;">
							Message Sent! <strong>Thank You</strong>.
						</div>
					</div>
					<div class="span8">
						<p><h3>Like Our Facebook : </h3>
							<div class="fb-like" data-href="http://www.facebook.com/Walfdreams" data-send="true" data-width="450" data-show-faces="true"></div>
						</p>
						<p><h3>Follow Our Twitter : </h3>
							<a href="https://twitter.com/WalfDreams" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @WalfDreams</a>
							<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
						</p>
						<a class="btn btn-large" href="http://www.facebook.com/walfdreams"><i class="fwicon-facebook"></i> Walfdreams</a>
						<a class="btn btn-large" href="http://www.twitter.com/walfdreams"><i class="fwicon-twitter"></i> @walfdreams</a>
					</div>
				</div>
			</div>
		</div><!--row-fluid-->
	</div>
</div><br><br><br>
<?php include('inc/footer.htm'); ?>
<!--<script src="assets/js/contact.js"></script>-->
<script>
	$(document).ready(function() {  
		$('form').submit(function(e) {
			e.preventDefault();
		// $('#send').click(function() {
			$('#send').fadeOut(200);
			setTimeout(function() {
	      		$('#loading').show();
	      	}, 200);
			var name = $("#name").val();
			var email = $("#email").val(); 
			var phone = $("#phone").val(); 
			var message = $("#message").val();  
			var dataString = 'name='+ name + '&email=' + email + '&phone=' + phone + '&message=' + message;
			$.ajax({
				type: "POST",
				url: "ajaxemail.php",
				data: dataString,
				success: function() {
					setTimeout(function() {
	      				$('#loading').fadeOut(300);
	      			}, 300);
					setTimeout(function() {
	      				$('#infobox').show();
	      				$('#infobox').addClass('animated flipInX');
	      			}, 500);
			    }
			});
			//return false;
		});
	});
</script>
<?php include('inc/htmlclose.htm'); ?>