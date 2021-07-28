<!DOCTYPE html>
<html>

<head>
	<title>FormProcessing</title>

<body>
	<?php
	if (isset($_POST["dane"])) {
		if ($_POST["name"] == "")
			echo "Ведите имя <a href='/learnPhp/index.php' /> Исправить";
		else
			header("Location:index.php");
	}

	?>
	<form name="test" action="" method="post">
		<label>Name: </label><br />
		<input type="text" name="name" placeholder="Name" /><br />
		<label>Email: </label><br />
		<input type="text" name="email" placeholder="Email" /><br />
		<label>Messages: </label><br />
		<textarea name="message" cols="20" rows="10"></textarea><br />
		<input name="done" type="submit" />
	</form>
</body>
</head>