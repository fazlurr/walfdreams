<?php
function get_html_header($title) {
?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
	    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	    <meta charset="utf-8">
	    <title><?php echo $title;?></title>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta name="description" content="Walfdreams Boneka Aromatherapy">
	    <meta name="author" content="">

		<!-- CSS
	  ================================================== -->
		<!--<link rel="stylesheet" href="assets/css/bootstrap.css">
		<link rel="stylesheet" href="assets/css/bootstrap-responsive.min.css">-->
		<link rel="stylesheet" href="assets/css/bootstrap-combined.no-icons.min.css">
		<link rel="stylesheet" href="assets/css/playful.css">
		<link rel="stylesheet" href="assets/css/jquery.fancybox.css">
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/3.2.0/css/font-awesome.css">
		<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,800italic,400,700,600,300,800'>
		<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="assets/css/book.css">
		<link rel="stylesheet" href="assets/css/custom.css">
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<!-- Favicons
		================================================== -->
		<link rel="shortcut icon" href="images/favicon.ico">
	</head>
<?php
}

function get_html_navbar() {
?>
	<body>
		<div class="container upper"></div>
		<a href="http://walfdreams.com/"><div class="ribbon"></div></a>
		<div class="navbar">
      		<div class="navbar-inner">
        		<div class="container">
		          	<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
		            	<span class="icon-bar"></span>
		            	<span class="icon-bar"></span>
		            	<span class="icon-bar"></span>
		          	</button>
		          	<a class="brand" href="http://walfdreams.com/">Walfdreams</a>
		          	<div class="nav-collapse collapse">
		            	<ul class="nav pull-right">
			              	<li class=""><a href="http://walfdreams.com/">HOME</a></li>
			              	<li class=""><a href="story">STORY</a></li>
			              	<li class=""><a href="store.php">STORE</a></li>
			              	<li class=""><a href="howto.php">HOW TO</a></li>
			              	<li class=""><a href="confirm.php">CONFIRM</a></li>
			              	<li class=""><a href="about.php">ABOUT</a></li>
			              	<li class=""><a href="contact.php">CONTACT US</a></li>
		            	</ul>
		            	
		          	</div>
		        </div><!--Container-->
		    </div>
		</div><!--Navbar-->
<?php
}

function get_html_footer() {
?>
		<!-- Footer
    	================================================== -->
		<footer class="footer">
			<div class="container">
				<center>
					<img src="assets/img/logo.png" width="175px" height="175px">
					<!--<p>Copyright &copy; 2013 Walfdreams&#8482;, All Rights Reserved.-->
				</center>
			</div>
		</footer>

		<!-- Le javascript
	    ================================================== -->
	    <!-- Placed at the end of the document so the pages load faster -->
	    <script src="assets/js/jquery-1.8.2.min.js"></script>
	    <script src="assets/js/bootstrap.min.js"></script>
	    <script src="assets/js/flowplayer.min.js"></script>
	    <script src="assets/js/jquery.fancybox.pack.js"></script>
<?php
}

function get_html_closing() {
?>
	</body>
</html>
<?php
}
?>
