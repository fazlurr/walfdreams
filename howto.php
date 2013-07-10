<?php
	$title = "<title>Walfdreams | How To</title>";
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
	include('inc/footer.htm');
	include('inc/htmlclose.htm');
?>