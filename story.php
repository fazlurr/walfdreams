<?php
	include_once('init.php');
	$title = 'Walfdreams | Story';
	get_html_header($title);
	get_html_navbar();
?>
<!--Content-->
<div class="down">
	<div class="container center">
		<div class="jumbotron">
			<div class="container">
				<h1>Who is Walf ?</h1><br>
				<p style="font-size: 24px;">Walf is a young, kind-hearted teddy bear that lives in a village called Wutkroft Woods.<br>He loves helping others, even in his dreams! In his dreams, he helps others in distress with his secret weapon: the aroma of the fragranced flowers that exist within his body</p>
				<p>Now let's join his adventure!</p>
			</div>
		</div>
		<div class="garis"></div>
		<div class="row-fluid">
	        <ul class="thumbnails">
	        	<!--Book 1-->
              <li class="span4">
                <div class="thumbnail"> 
                  	<img src="assets/img/thumb-pro.png" alt="Cover">
                  	<div class="caption">
	                    <center><h3>Prologue</h3>
	                    <p></p></center>
	                    <div class="ribbon-stitches"></div>
	                    <a class="btn btn-large btn-block" href="http://walfdreams.com/story/prologue/"><i class="icon-book"></i> Read</a>
                  	</div>
                </div>
              </li>
              <!--Book 2-->
              <li class="span4">
                <div class="thumbnail"> 
                  	<img src="assets/img/thumb-1.png" alt="Cover">
                  	<div class="caption">
	                    <center><h3>Chapter One</h3>
	                    <p>Adventure Starts Here!</p></center>
	                    <div class="ribbon-stitches"></div>
	                    <a class="btn btn-large btn-block" href="http://walfdreams.com/story/chapter-one/"><i class="icon-book"></i> Read</a>
                  	</div>
                </div>
              </li>
              <!--Book 3-->
              <li class="span4">
                <div class="thumbnail"> 
                  	<img src="assets/img/logo.png" alt="Cover">
                  	<div class="caption">
	                    <center><h3>Book 3</h3>
	                    <p>Coming Soon</p></center>
	                    <!--<div class="ribbon-stitches"></div>
	                    <a class="btn btn-large btn-block" href="#"><i class="icon-book"></i> Read</a>-->
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