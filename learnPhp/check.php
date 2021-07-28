<?php
if($_POST["name"] == "")
	echo "Ведите имя <a href='/learnPhp/index.php' /> Исправить";
else
	echo $_POST["name"];

?>