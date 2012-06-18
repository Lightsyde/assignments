<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Hashing</title>
	</head>

	<body>
	
	<?php
	
	echo md5('thomas');
	echo '<br>';
	
	echo md5('thomas');
	
	
	echo '<br>';
	
	echo sha1('thomas');
	
	echo '<br>';
	$rand = substr(
				strtr(
					base64_encode(
						openssl_random_pseudo_bytes(16)
					)
				, '+', '.')
			,0,22);
	$salt = '$2a$12$' . $rand;
	echo crypt('thomas', $salt);
	?>
	
	
	</body>
</html>