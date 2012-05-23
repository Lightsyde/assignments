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
			<div id="entireform">
				<div class="formitem">
					<label for="name">Name:
						<?php if(isset($errors['name'])) : ?>
							<strong class="error">is required!!!!</strong></label>
						<?php endif ?>
					<input id="name" name="name" required value=<?php echo $name; ?>>
				</div>
				
				
				
					
				<div class="formitem">
					<label for="email">Email Address: 
						<?php if(isset($errors['email'])): ?>
							<strong class="error">is required!!!</strong></label>
						<?php endif ?>	
					<input id="email" name="email" required value= "<?php echo $email; ?>">
				</div>
				
				
				
				<div class="formitem">
					<label for="username">Username:
						<?php if(isset($errors['username'])) : ?></label>
							<strong class="error">must be between 4 and 25 characters</strong>
						<?php endif; ?>
					<input id="username" name="username" required value="<?php echo $username; ?>">
					
				</div>
				
				
				<div class="formitem">
					<label for="password">Password: 
						<?php if(isset($errors['password'])) : ?></label>
							<strong class="error">is required!!!</strong>
						<?php endif; ?>
					<input type="password" id="password" name="password" required value="<?php echo $password; ?>">
					
				</div>
				
				
				
				<div class="formitem">
					<label for="confirm_password">Confirm password:
						<?php if(isset($errors['confirm_password'])) : ?></label>
							<strong class="error">your passwords do not match!!!</strong>
						<?php endif; ?></label>
					<input type="password" id="confirm_password" name="confirm_password" required value="<?php echo $confirm_password; ?>">
				</div>
				
				<div class="formitem">
					<fieldset>
						<legend>Preferred language:
							<?php if(isset($errors['language'])) : ?></legend>
								<strong class="error">Select your preferred language!!!</strong>
							<?php endif; ?>
							
						<?php foreach($possible_languages as $key => $value) : ?>
							<input type="radio" id="<?php echo $key; ?>" name="language" value="<?php echo $key; ?>">
							<label for="<?php echo $key; ?>"><?php echo $value; ?></label>
						 <?php endforeach ?>
					
					</fieldset>
				</div>
				
				<div class="formitem">
					<label for="notes">Notes
						<?php if(isset($errors['notes'])) : ?></label>
								<strong class="error">must be between 7 and 150 characters long!!!</strong>
							<?php endif; ?>
					<textarea id="notes" name="notes"></textarea>
					<p>must be between 7 and 150 characters long.</p>
				</div>
			</div>
			<button type="submit">Send</button>
		</form>
	
	</body>
</html>






















