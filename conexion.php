<?php 
try {

	$base=new PDO("mysql:host=localhost; dbname=productos_m","root","");
	echo "";
	
} catch (Exception $e) {
	die("¡Error de conexion!".$e->getMessage());
	
}

?>