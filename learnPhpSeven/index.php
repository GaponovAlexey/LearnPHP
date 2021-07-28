<?php
//$file = fopen("a.txt", "a+t");
//fwrite($file, "Exemple\nText\nclose\n");
//fclose($file);


//$file = fopen("a.txt", "r+t");
//while (!feof($file))
//echo fread($file, 22)."<br />";
//fseek($file, 0);
//echo fread($file, 22)."<br />";
//fclose($file);

//while (!feof($file))
//	echo fread($file, 99)."<br/>";
//fclose($file);

//echo "-------------------------------------------";

file_put_contents("c.txt", "Test Test SETTEST");

//echo file_get_contents("c.txt");
//echo file_exists('c.txt');
echo filesize('c.txt');
rename("c.txt", "a.txt");
echo filesize('a.txt');
unlink("a.txt");