<?php

require_once 'includes/form-processor.php';

$possible_subjects = array(
	'Work enquiries'
	, 'General information'
	, 'Unicorns for sale'
	
);

?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Form Validation</title>
		<link href="css/general.css" rel="stylesheet">
	</head>

<body>
	<form method="post" action="index.php">
		<div>
			<label for="name">Name 
				<?php if (isset($errors['name'])) :?>
					<strong class="error">is required</strong></label>
				<?php endif; ?>
			<input id="name" name="name" required value="<?php echo $name; ?>">
		</div>
		
		<div>
			<label for="email">E-mail Address
				<?php if (isset($errors['email'])) :?>
					<strong class="error">is required</strong></label>
				<?php endif; ?>
			<input type="email" id="email" name="email" required value=" <?php echo $email; ?>">
		</div>
		
		<div>
			<label for="subject">Subject</label>
			<select id="subject" name="subject">
				<?php foreach($possible_subjects as $key => $value) : ?>
				<option value="<?php echo $key; ?>"><?php echo $value; ?></option>
				<?php endforeach; ?>
			</select>
		</div>
		
		<div>
			<label for="message">Message 
				<?php if (isset($errors['message'])) :?>
					<strong class="error">must be between 5 and 100 characters long</strong></label>
				<?php endif; ?>
			<textarea id="message" name="message"><?php echo $message; ?></textarea>
			<p>5 to 100 characters long</p>	
		</div>
		
		<div>
			<input type="checkbox" id="terms" name="terms" value="1">
			<label for="terms">Accept terms?
				<?php if (isset($errors['terms'])) :?>
					<strong class="error">You must comply!!</strong></label>
				<?php endif; ?>
			</label>
		</div>
		
		<fieldset>
			<legend>Favorite exotic meat:</legend>
			
			<input type="radio" id="unicorn" name="meat" value="unicorn">
			<label for="unicorn">Unicorn</label>
			
			<input type="radio" id="leprechan" name="meat" value="leprechan">
			<label for="leprechan">Leprechan</label>
			
			<input type="radio" id="yeti" name="meat" value="yeti">
			<label for="yeti">Yeti</label>
		</fieldset>
		
		<button type="submit">Send</button>
	</form>
</body>
</html>