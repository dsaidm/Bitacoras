<?php
	$link = mysqli_connect("localhost","root", "","daniel") or die("Not connected.");
	if ($link){
		echo 'conexión correcta';
	}
?>