<!DOCTYPE html>
<html>

<head>
	<title>Validate Form</title>
	<meta name="author" value="Joe Casabona" />
</head>

<body>
	<main>
		<?php
		if (isset($_POST['submit'])) {
			$num = (int) ($_POST['number']);

			if ($num > 0 && is_int($num)) echo "postive integer";
			else  echo "Negative integer";
		}
		?>
		<form name="submit_number" method="POST">
			<div>
				<label for="name">Submit a Positive Integer:</label>
				<input type="text" name="number" />
			</div>
			<div><input type="submit" name="submit" value="Submit Number" /></div>
		</form>
	</main>
</body>

</html>