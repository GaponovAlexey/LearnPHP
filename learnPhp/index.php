<!DOCTYPE html>
<html>

<head>
	<title>FormProcessing</title>

<body>
	<form name="test" action="check.php" method="post">
		<label>Name: </label><br />
		<input type="text" name="name" placeholder="Name" /><br />
		<label>Email: </label><br />
		<input type="text" name="email" placeholder="Email" /><br />
		<label>Messages: </label><br />
		<textarea type="message" cols="20" rows="10"></textarea>
		<br />
		<input type="submit" name="done" value="Отправить" />
	</form>
</body>
</head>