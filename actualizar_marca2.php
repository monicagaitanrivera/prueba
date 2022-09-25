<?php
include 'conexion.php';

if(isset($_POST['btn1'])){
	$nombre_m=$_POST['txt1'];
	 $descripcion_m=$_POST['txt2'];
   

	try{
		$sqlu2=" UPDATE marca SET nombre_m=:nom,descripcion_m=:descri WHERE id_marca=".$_REQUEST['final'].";";
		$resultado1=$base->prepare($sqlu2);
		$resultado1->execute(array(":nom"=>$nombre_m,":descri"=>$descripcion_m));
		?>
		<script type="text/javascript">window.alert("Actualización Exitosa!!");window.location="consulta_marca.php"</script>
				
		<?php

		
	   } catch(Exception $e){
			die("¡ERROR DE CONEXIÓN!" .$e->getMessage());
   
	 }

} 
?>

