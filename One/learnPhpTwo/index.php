<?php
$x = 15;
echo isset($x);

unset($x);
echo isset($x);

$x = '12';
echo "is number - " . is_numeric($x) . "<br/>";
echo "is is_integer - " . is_integer($x) . "<br/>";
echo "is gettype - " . gettype($x) . "<br/>";
