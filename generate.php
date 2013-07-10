<?php
	if(copy("http://localhost/walf/about.php", "about.html")) {
		echo "about.html generated<br>";
	}
	if(copy("http://localhost/walf/buy.php", "buy.html")) {
		echo "buy.html generated<br>";
	}
	if(copy("http://localhost/walf/confirm.php", "confirm.html")) {
		echo "confirm.html generated<br>";
	}
?>