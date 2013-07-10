<?php
	$title = "<title>Walfdreams | Store</title>";
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
	<div class="container center">
		<div class="jumbotron">
			<div class="container">
				<h1>Ready to Adopt Walf ?</h1>
				<p style="line-height: 2.25;">Walf is ready to love you and help you relax.</p>
			</div>
		</div>
		<div class="garis"></div>
		<div class="row-fluid">
	        <ul class="thumbnails">
              <li class="span4">
                <div class="thumbnail"> 
                  	<center>
	                  	<div id="myCarousel" class="carousel slide">
			                <ol class="carousel-indicators">
			                  <li data-target="#myCarousel" data-slide-to="0" class=""></li>
			                  <li data-target="#myCarousel" data-slide-to="1" class=""></li>
			                  <li data-target="#myCarousel" data-slide-to="2" class=""></li>
			                </ol>
			                <div class="carousel-inner">
			                  	<div class="item active">
			                  		<a class="fancybox" rel="group1" href="assets/img/product/walf.jpeg">
			                  		<img src="assets/img/product/thumb.jpeg" alt="Depan" width="355" height="387"></a>
			                  	</div>
			                  	<div class="item">
			                  		<a class="fancybox" rel="group1" href="assets/img/product/walf1.jpeg">
			                  		<img src="assets/img/product/thumb1.jpeg" alt="Belakang"  width="355" height="387"></a>
			                  	</div>
			                  	<div class="item">
			                  		<a class="fancybox" rel="group1" href="assets/img/product/walf2.jpeg">
			                  		<img src="assets/img/product/thumb2.jpeg" alt="Samping"  width="355" height="387"></a>
			                  	</div>
			                </div>
			                <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
			                <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
			            </div>
		        	</center>
                  	<div class="caption">
                  		<center>
	                    <h3>Walf Plush</h3>
	                    <h3>IDR 159,000</h3>
	                    <div class="ribbon-stitches"></div>
	                    <form name="" method="post" action="buy.php">
	                    	<input type="hidden" name="product-name" value="Walf">
	                    	<h4>Aroma :
		                    <select name="aroma" id="aroma">
		                    	<option value="grapefruit">Grapefruit</option>
		                    	<option value="orange">Orange</option>
		                    	<option value="lemon">Lemon</option>
		                    </select></h4>
		                    <button type="submit" class="btn btn-large btn-block"><i class="fwicon-shopping-cart"></i> Buy</button>
	                	</form>
	                	</center>
                  	</div>
                </div>
              </li>
              <!-- Product 2 -->
              <li class="span4">
                <div class="thumbnail">
                  <img alt="Coming Soon" src="assets/img/logo.png" title="Coming Soon">
                  <div class="caption">
                    <center><h3>Coming Soon</h3></center>
                    <div class="ribbon-stitches"></div>
                  </div>
                </div>
              </li>
              <!-- Product 3 -->
              <li class="span4">
                <div class="thumbnail">
                  <img alt="Coming Soon" src="assets/img/logo.png" title="Coming Soon">
                  <div class="caption">
                    <center><h3>Coming Soon</h3></center>
                    <div class="ribbon-stitches"></div>
                  </div>
                </div>
              </li>

            </ul>
	    </div><!--Row-Fluid-->
	</div><!--Container-->
</div><!--Down-->
<?php include('inc/footer.htm'); ?>
<script>
	$(document).ready(function(){
  		$('.carousel').carousel({
  			'interval' : false
  		});
  		$("a.fancybox").fancybox({
			'transitionIn'	:	'elastic',
			'transitionOut'	:	'elastic',
			'speedIn'		:	600, 
			'speedOut'		:	200, 
			'overlayShow'	:	true
  		});
	});
</script>
<?php include('inc/htmlclose.htm'); ?>