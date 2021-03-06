<?php
/**
 *Small description of this file:
 *Lists all the dinosaurs in the database
 *
 *@author Lightsyde (Titar Awua-Imande) <taimande@gmail.com>
 *@copyright 2012 Titar Awua Imande
 *@licence BSD-3-Clause <http://github.com/..../licence.txt>
 *@version 1.0.0
 *@package Dinosaurs\Controllers
*/
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