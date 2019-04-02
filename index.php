<?php
	require_once 'Person.php'
?>

<!DOCTYPE html>
<html>
<head>
	<title>Person</title>
	<meta charset = "utf-8">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 
</head>

	<body>
		<div class ="container">
			<div class ="row">
				<div class ="col-md-4 col-md-offset-4">
					<form method = "GET">
						<div class="form-group">
							<label>Input</label>
							<input type="text" name="name" class="form-control">
							<input type="number" name="age" class="form-control">
						</div>
						
						<button type="submit" class="btn btn-primary">Send</button>
					</form>
					
					<?php
						/**
						*execise 1 softuni
						*/
						if (isset($_GET['name']) && isset($_GET['age'])) {
							$name = $_GET['name'];
							$age = intval($_GET['age']);
							
							var_dump($name) . "<br>";
							var_dump($age);
							$person = new Person($name,$age);
							var_dump($person);
							
							echo "Name " . $person->getName() . " Age :" . $person ->getAge();
						}
					?>
				</div>
			</div>
		</div>
	</body>
</html>
