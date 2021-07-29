<?php
$str = "this is exemple";
//echo strlen($str) . "<br />";
//if (strpos($str, "is"))
//	echo 'found';
//else
//	echo 'no';

//echo "<br/>".strpos($str, 'is');
echo "<br/>".substr($str, 1, 7);
echo "<br/>".str_replace(['this', 'ple'], ['his'], $str);

$str ="<b>Хаха, жирный шрифт</b>";
echo "<br/>".htmlspecialchars($str);
echo "<br/>".md5("321");
echo "<br/>".trim("3  2   1 123123 dasd11 d1d");