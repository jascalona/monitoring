<?php
	$conn = mysqli_connect('localhost', 'root', '', 'test');
	
	if(!$conn){
		die("Error: Fallo al conectar con la base de datos");
	}
?>