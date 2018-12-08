<?php
	header("Content-type:video/mp4");
	$file = fopen("sample.mp4","rb");

	$return= fread($file,filesize("sample.mp4"));

	echo $return;

?>
