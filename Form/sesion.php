<?php
session_start();
$num = (isset($_SESSION["num"])) ?
	$_SESSION["num"] : 0;
$num++; //"session count"			
$_SESSION["num"] = $num;
echo "the user has refreshed the page :$num";			
//session_destroy();			