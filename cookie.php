<?php

$num = (isset($_COOKIE["num"]))
	? $_COOKIE["num"] : 0;
$num++;
setcookie("num", $num, time() + 2);
echo "the user has refreshed the page :$num";
