<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>feedbackForm</title>
</head>

<body>

	<?php
	session_start();
	if (isset($_POST["send"])) {
		$from = htmlspecialchars($_POST["from"]);
		$to = htmlspecialchars($_POST["to"]);
		$subject = htmlspecialchars($_POST["subject"]);
		$massage = htmlspecialchars($_POST["massage"]);
		$_SESSION["from"] = $from;
		$_SESSION["to"] = $to;
		$_SESSION["subject"] = $subject;
		$_SESSION["massage"] = $massage;
		print_r($_SESSION);
		$error_from = "";
		$error_to = "";
		$error_subject = "";
		$error_massage = "";
		if($from == "" || !preg_match("/@/", $from)) {
			$error_from = "Error email";
			$error = true;
		}
		if($to == "" || !preg_match("/@/", $to)) {
			$error_to = "Error email";
			$error = true;
		}
		if(strlen($subject) == 0) {
			$error_subject = "the have need in the theme of messages";
			$error = true;
		}
		if(strlen($massage) == 0) {
			$error_massage = "the have need in the theme of messages";
			$error = true;
		}
	}
	?>

	<h2>feedbackForm</h2>
	<form method="post" name="feedback" action="">
		<lave>From whom:</lave><br />
		<input type="text" name="from" value="<?= $_SESSION["from"] ?>" /><br />
		<span style="color:red"><?= $error_from ?></span>
		<lave>To whom:</lave><br />
		<input type="text" name="to" value="<?= $_SESSION["to"] ?>" /><br />
		<span style="color:red"><?= $error_to ?></span>
		<lave>Teme:</lave><br />
		<input type="text" name="subject" value="<?= $_SESSION["subject"] ?>" /><br />
		<span style="color:red"><?= $error_subject ?></span>
		<lave>Messages:</lave><br />
		<textarea type="text" name="massage" rows='2' cols='20'><?= $_SESSION["massage"] ?></textarea>
		<input type="submit" name="send" value='send' />
		<span style="color:red"><?= $error_massage ?></span>
	</form>
</body>

</html>