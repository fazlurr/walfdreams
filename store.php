<?php
	include_once('init.php');
	$title = 'Walfdreams | Store';
	get_html_header($title);
	get_html_navbar();
?>
<!--Content-->
<div class="down">
	<div class="container center">
		<div class="jumbotron">
			<div class="container">
				<h1>Ready to Adopt Walf ?</h1>
				<p>Walf is ready to love you and help you relax.</p>
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
	                    <h3>Walf</h3>
	                    <p>A Teddy Bear with Aromatherapy</p>
	                    <div class="ribbon-stitches"></div>
	                    <form name="" method="post" action="buy.php">
	                    	<input type="hidden" name="product-name" value="Walf">
	                    	<strong>Aroma : </strong>
		                    <select name="aroma">
		                    	<option value="grapefruit">Grapefruit</option>
		                    	<option value="orange">Orange</option>
		                    	<option value="lemon">Lemon</option>
		                    </select>
		                    <button type="submit" class="btn btn-large btn-block"><i class="icon-shopping-cart"></i> Buy</button>
	                	</form>
                  	</div>
                </div>
              </li>
              
              <li class="span4">
                <div class="thumbnail">
                  <img alt="Coming Soon" style="width: 365px; height: 400px;" src="assets/img/slide2.png">
                  <div class="caption">
                    <h3>Coming Soon</h3>
                    <div class="ribbon-stitches"></div>
	                    	<strong>Aroma : </strong>
		                    <select name="pilihan">
		                    	<option value="wangi_1">Grapefruit</option>
		                    	<option value="wangi_2">Orange</option>
		                    	<option value="wangi_2">Lemon</option>
		                    </select>
		                    <p><a class="btn btn-large btn-block disabled" disabled=""><i class="icon-shopping-cart"></i> Buy</a></p>
	                	</form></p>
                  </div>
                </div>
              </li>
              
              <li class="span4">
                <div class="thumbnail">
                  <img alt="Coming Soon" style="width: 365px; height: 400px;" src="assets/img/slide2.png">
                  <div class="caption">
                    <h3>Coming Soon</h3>
                    <div class="ribbon-stitches"></div>
	                    	<strong>Aroma : </strong>
		                    <select name="pilihan">
		                    	<option value="wangi_1">Grapefruit</option>
		                    	<option value="wangi_2">Orange</option>
		                    	<option value="wangi_2">Lemon</option>
		                    </select>
		                    <p><a class="btn btn-large btn-block disabled" disabled=""><i class="icon-shopping-cart"></i> Buy</a></p>
	                	</form></p>
                  </div>
                </div>
              </li>

            </ul>
	    </div><!--Row-Fluid-->
	</div><!--Container-->
</div><!--Down-->
<?php
	get_html_footer();
?>
<script type="text/javascript">
	$(document).ready(function(){
  		$('.carousel').carousel();
  		$("a.fancybox").fancybox({
			'transitionIn'	:	'elastic',
			'transitionOut'	:	'elastic',
			'speedIn'		:	600, 
			'speedOut'		:	200, 
			'overlayShow'	:	true
  		});
	});
</script>
<?php
	get_html_closing();	
?>