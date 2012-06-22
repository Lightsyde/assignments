<?php

require_once 'includes/db.php';

$results = $db->query('
	SELECT id, item, status
	FROM todo
');

foreach ($results as $item) :

?>

<li data-id="<?php echo $item['id']; ?>" data-status="<?php echo $item['status']; ?>">
	<?php echo $item['item']; ?>
</li>

<?php

endforeach;

?>
