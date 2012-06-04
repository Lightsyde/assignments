<?php

require_once 'includes/database.php';

$sql = $db->query('

	SELECT id,movie_title,release_date,director
	FROM movies
	ORDER BY movie_title ASC


');

$results = $sql->fetchAll();

?><!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Movie Browser</title>
	</head>

	<body>
		<?php foreach($results as $movies): ?>
		<h2><?php echo $movies['movie_title']; ?></h2>
		<dl>
			<dt>Release Date</dt>
			<dd><?php echo $movies['release_date']; ?></dd>
			<dt>Director</dt>
			<dd><?php echo $movies['director']; ?></dd>
			
		</dl>
		<?php endforeach; ?>
	</body>
</html>