<?php
	include_once('init.php');
	$title = 'Walfdreams | How To';
	GetHeader($title);
	GetHeaderClosing();
	get_html_navbar();
?>
<!--Content-->
<div class="down">
	<div class="jumbotron">
		<div class="container">
			<h1>How to Take Care of Walf</h1>
			<p>4 easy steps</p>
			<div class="garis"></div>
			<div class="row-fluid" id="howto">
				<div class="span3">
					<img src="assets/img/howto1.png" class="dashed-border">
				</div>
				<div class="span3">
					<img src="assets/img/howto2.png" class="dashed-border">
				</div>
				<div class="span3">
					<img src="assets/img/howto3.png" class="dashed-border">
				</div>
				<div class="span3">
					<img src="assets/img/howto4.png" class="dashed-border">
				</div>
			</div>
			<div class="garis"></div>
		</div>
	</div>
</div>
<?php
	get_html_footer();
	get_html_closing();
?>