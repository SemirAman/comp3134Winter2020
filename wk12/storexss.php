<?php
	$myfile = fopen("webdictionary.txt", "r") or die("Cannot open file!");
	echo fread($myfile,filesize("storedxss.txt"));
	fclose($myfile);
?>

