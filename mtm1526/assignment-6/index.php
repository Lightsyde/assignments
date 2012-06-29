<?php
	$planet = 'earth';
				
				if(isset($_GET['planet'])) {
					$planet = strtolower($_GET['planet']);
				}

?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Planets</title>
		<link href="css/general.css" rel="stylesheet">
	</head>

	<body>
	
	
		<nav>
			<ul>
				<li <?php if ($planet !='mars' && $planet !='jupiter' && $planet !='venus') { ?> class="current" <?php } ?>><a href="?planet=earth" id="getahtml">Earth</a></li>
				<li <?php if ($planet == 'mars') { ?> class="current" <?php } ?>><a href="?planet=mars" id="getbhtml">Mars</a></li>
				<li <?php if ($planet =='jupiter') { ?> class="current" <?php  } ?>> <a href="?planet=jupiter" id="getchtml">Jupiter</a></li>
				<li <?php if ($planet =='venus') { ?> class="current" <?php } ?>><a href="?planet=venus" id="getdhtml">Venus</a></li>
			</ul>
		</nav>
	
		<article id="fillme">
			
			<?php
				
				switch ($planet) {
					
					
					case 'mars' :
						include 'includes/mars.php';
					break;
					
					case 'jupiter' :
						include 'includes/jupiter.php';
					break;
					
					case 'venus' :
						include 'includes/venus.php';
					break;
					
					default :
						include 'includes/earth.php';
					break;
				}
			?>
			
		</article>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script src="js/load-pages.js"></script>
	</body>
</html>