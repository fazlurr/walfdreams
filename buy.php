<?php
	if (!isset($_POST['aroma'])) {
		$aroma = 'grapefruit';
	}
	else {
		$product = $_POST['product-name'];
		$aroma = $_POST['aroma'];
	}
	include_once('init.php');
	$title = 'Walfdreams | Buy';
	get_html_header($title);
	get_html_navbar();
?>
<!--Content-->
<div class="down">
	<div class="container center buy bottom-shadow">
		<center>
			<form method="post" action="confirm.php">
				<h1><?php echo $product; ?></h1>
				<input type="hidden" name="product-name" value="<?php echo $product; ?>">
				<p><strong>Aroma : </strong>
	            <select name="aroma" style="width: 160px;">
	            	<option value="grapefruit" <?php if($aroma=='grapefruit'){ echo 'selected';}?>/>Grapefruit</option>
	            	<option value="orange" <?php if($aroma=='orange'){ echo 'selected';}?>/>Orange</option>
	            	<option value="lemon" <?php if($aroma=='lemon'){ echo 'selected';}?>/>Lemon</option>
	            	<option value="lavender" <?php if($aroma=='lavender'){ echo 'selected';}?>/>Lavender</option>
	            </select></p>
				<p><strong>Amount : <input type="number" name="jumlah" min="1" value="1" id="jumlah" style="width: 150px;"></strong></p>
				<p><strong>City : </strong>
				<select name="kota" id="kota">
					<?php
					echo '<option value="6000">Jakarta</option>
					<option value="7000">Bogor</option>
					<option value="7000">Depok</option>
					<option value="7000">Tangerang</option>
					<option value="7000">Tangerang Selatan</option>
					<option value="7000">Bekasi</option>
					<option value="9000">Bandung</option>';
					?>
				</select>
				</p>
				<h4>Shipping : Rp<span id="hargaShipping"></span></h4>
				<p style="font-size: 15px;">*Tiki Regular</p>
				<h3>Total : Rp<span id="totalHarga"></span></h3>
				<div class="ribbon-stitches"></div>
				<!-- Kotak Email -->
				<div class="envelope" style="width: 300px;"><p><input type="email" placeholder="Your Email Address" name="email" style="margin-bottom: 0px; width: 263px;" required></p></div><!--Inspired From Gumroad.com-->
				<?php
          			require_once('assets/lib/recaptchalib.php');
          			$publickey = "6LcsD-MSAAAAAGJMhiM9Ztf-owFiw4ycqiVGUq_f"; // you got this from the signup page
          			echo recaptcha_get_html($publickey);
        		?><br>
				<button type="submit" class="btn btn-large btn-block" style="width: 300px;"><i class="icon-shopping-cart"></i> Confirm Buy</button>
			</form>
		</center>
	</div>
</div>
<?php
	get_html_footer();
?>
<script>
	$(document).ready(function() {
		function displayVals() {
		  	var intJumlah = parseInt($("input#jumlah").val());
		  	var intKota = parseInt($("select#kota option:selected").val());
		  	var hargaWalf = parseInt("149000");
		  	var tambahKirim = (hargaWalf + intKota);
		  	var hargaTotal = (tambahKirim * intJumlah);
	      	$("#hargaShipping").html(intKota);
	      	$("#totalHarga").html(hargaTotal);
	    }
	    $("select").change(displayVals);
	    $("input#jumlah").change(displayVals);
	    displayVals();
	});
</script>
<?php
	get_html_closing();	
?>