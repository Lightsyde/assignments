<?php

require_once 'includes/db.php';

$sql = $db->query('
	SELECT id, dino_name, loves_meat, in_jurassic_park
	FROM dinosaurs
	ORDER BY dino_name ASC
');

// Display the last error created by our database
//var_dump($db->errorInfo());

$results = $sql->fetchAll();

?>

<!DOCTYPE HTML>
	<head>
		<meta charset="utf-8" />
		<title>Dinosaurs</title>
	</head>

	<body>
	
		<a href="add.php">Add a Dinosaur</a>
		
		<?php foreach($results as $dino) : ?>
		<h2><a href="single.php?id=<?php echo $dino['id']; ?>">
			<?php echo $dino['dino_name']; ?>
			</a>
		</h2>
		<dl>
			<dt>Loves Meat</dt>
			<dd><?php echo $dino['loves_meat']; ?></dt>
			<dt>In Jurassic Park</dt>
			<dd><?php echo $dino['in_jurassic_park']; ?></dt>
		
		</dl>
		<?php endforeach; ?>
	
	
	</body>
</html>