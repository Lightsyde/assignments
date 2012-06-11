<?php

require_once 'includes/database.php';

$sql = $db->query('

	SELECT id,movie_title,release_date,director
	FROM movies
	ORDER BY release_date DESC


');

$results = $sql->fetchAll();

?><!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Movie Browser</title>
	</head>

	<body>
		<a href="adding.php">Add a Movie</a>
		<?php foreach($results as $movies): ?>
		<h2><a href="single.php?id=<?php echo $movies['id']; ?>">
			<?php echo $movies['movie_title']; ?>
		</h2>
		<dl>
			<dt>Release Date</dt>
			<dd><?php echo $movies['release_date']; ?></dd>
			<dt>Director</dt>
			<dd><?php echo $movies['director']; ?></dd>
			
		</dl>
		<?php endforeach; ?>
	</body>
</html>