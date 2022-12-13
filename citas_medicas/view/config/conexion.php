<?php
	
	$mysqli = new mysqli('localhost', 'root', '', 'citas_db');
	
	if($mysqli->connect_error){
		
		die('Error en la conexion' . $mysqli->connect_error);
		
	}
?>