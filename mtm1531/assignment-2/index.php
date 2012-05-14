<?php
	var_dump($_POST);

?><!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Money calculator form</title>
	</head>

	<body>
	
		<?php if ($_SERVER['REQUEST_METHOD'] == 'GET') : ?>
		<form method="post" action="index.php">
			<label for="number-1">Number 1</label>
			<input id="number-1" name="number-1" type="number">
			
			<label for="number-2">Number 2</label>
			<input id="number-2" name="number-2" type="number">
			
			
			<label for="function">Function</label>
			<select id ="function" name="function">
				<option value="+">+</option>
				<option value="-">-</option>
				<option value="/">/</option>
				<option value="*">*</option>
				
			</select>
			<button type="submit">Calculate</button>
		</form>
		<?php else : ?>
			<?php 
				switch ($_POST['function']) {
					case "+":
					?>
						<h1><?php 
						
							$number1 = $_POST['number-1'];
							$number2 = $_POST['number-2'];
							$sum = $number1 + $number2;
							
							$sumtax = (13/100) * $sum;
							
							$totalsum = $sum + $sumtax;
						echo $totalsum ?></h1>
						 
						
					
					<?php
					break;
					
					case "-":
					?>
						<h1><?php 
							$number1 = $_POST['number-1'];
							$number2 = $_POST['number-2'];
							$subtraction = $number1 - $number2;
							
							$sumtax = (13/100) * $subtraction;
							
							$totalsum = $subtraction + $sumtax;
						echo $totalsum ?></h1>
					<?php
					break;
					
					
					case "/":
					?>
						<h1><?php 
						
							$number1 = $_POST['number-1'];
							$number2 = $_POST['number-2'];
							$division = $number1 / $number2;
							
							$sumtax = (13/100) * $division;
							
							$totalsum = $division + $sumtax;
						echo $totalsum ?></h1>
					
					<?php
					break;
					
					
					case "*":
					
					?>
						<h1><?php 
							$number1 = $_POST['number-1'];
							$number2 = $_POST['number-2'];
							$multiply = $number1 * $number2;
							
							$sumtax = (13/100) * $multiply;
							
							$totalsum = $multiply + $sumtax;
						echo $totalsum ?></h1>
						
					
					<?php
					
					break;
					
					
				}
			?>
		<?php endif; ?>
	</body>
</html>