<?php
$ar = [12, 11, 44, 23, 51, 22, 1, 2];
$as = [5, 12, 44, 23, 55, 24, 2, 3];

//echo in_array(44, $ar);

print_r($ars = array_merge($ar, $as));
print_r($arx = array_slice($ar, 5, 7));