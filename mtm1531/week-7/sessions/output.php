<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Session Output</title>
	</head>

	<body>
	
	<?php
	
	session_start();
	
	echo $_SESSION['page_views'];
	
	?>
	</body>
</html>