<?php
	//get artist/title info
	$artist = $_GET['artist'];
	$title = $_GET['title'];
	
	//create a temp file to store values for AJAX script
	$r = fopen("temp_title.txt", "w");
	fwrite($r, $artist." - ".$title);
	fclose($r);
?>
