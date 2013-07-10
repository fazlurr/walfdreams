<?php
	if (!isset($_POST['aroma'])) {
		$not_set = true;
	}
	else {
		$not_set = false;
		$product = $_POST['product-name'];
		$email = $_POST['email'];
		$nama = $_POST['nama'];
		$aroma = $_POST['aroma'];
		$jumlah = $_POST['jumlah'];
		$shipping = $_POST['shipping'];
		$satuanWalf = 149000;
		$harga = ($satuanWalf * $jumlah);
		$total = ($harga + ($shipping * $jumlah));
	}
	$title = "<title>Walfdreams | Confirm</title>";
	$desc = '<meta name="description" content="Kami menjual boneka aromatherapy, Walfdreams">';
	include('inc/htmlopen.htm');
	echo $title;
	echo $desc;
	include('inc/metas.htm');
	include('inc/css.htm');
	include('inc/headclose.htm');
	include('inc/body.htm');
?>
<!--Content-->
<div class="down">
	<div class="jumbotron bottom30">
		<div class="container">
			<h1>Payment Details</h1>
		</div>
	</div>
	<div class="container" style="padding-bottom:30px;">
		<div class="garis"></div>
		<div class="row-fluid">
			<div class="span4 confirm-box">
				<h3>Your Recent Transaction :</h3>
				<?php if($not_set==true){ echo "<h4>No Transaction Found.</h4>"; }
					else { echo "<h4><p>" . $product . " " . $aroma . " " . $jumlah . "Buah </p><p>Shipping : " . $shipping . "</p><p>Total : Rp" . $total . "</p>
						<p>Please transfer the total amount to this bank account:<br>1982405577 on behalf of Wahyudi Suyanto (BCA)</p>"; }
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
				<p>- Transfer Receipt </p>
				</h4>
  			</div>
  			<div class="span4 dashed-border">
  				<h3>Example : </h3>
  				<h4>
  				<p>- Walf Brun </p>
  				<p>- Jl. Road No.99 Jakarta Selatan 12250</p>
  				<p>- +628xxxxx </p>
  				<p>- IDR 159,000 </p>
  				<p>- *Picture of Transfer Receipt </p>
  				</h4>
  			</div>
		</div>
	</div>
</div>
<?php
	include('inc/footer.htm');
	include('inc/htmlclose.htm');
?>