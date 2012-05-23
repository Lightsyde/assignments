<?php

require_once 'includes/form-processor.php'

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Registration form validation</title>
		<link href="css/general.css" rel="stylesheet" />
	</head>

	<body>
		<form method="post" action="index.php">
			<div>
				<div>
					<label for="name">Name:
						<?php if(isset($errors['name'])) : ?>
							<strong class="error">is required!!!!</strong></label>
						<?php endif ?>
					<input id="name" name="name" required value=<?php echo $name; ?>>
				</div>
				
				
				
				<div>
					
				</div>
					<label for="email">Email Address: 
						<?php if(isset($errors['email'])): ?>
							<strong class="error">is required!!!</strong></label>
						<?php endif ?>	
					<input id="email" name="email" required value= <?php echo $email; ?>>
				
				<div>
					
				</div>
			</div>
			<button type="submit">Send</button>
		</form>
	
	</body>
</html>






















