<?php
include 'conexion.php';

if(isset($_POST['btn1'])){
	$nombre_c=$_POST['txt1'];
	 $descripcion_c=$_POST['txt2'];
   

	try{
		$sqlu2=" UPDATE categoria SET nombre_c=:nom,descripcion_c=:descri WHERE id_categoria=".$_REQUEST['final'].";";
		$resultado1=$base->prepare($sqlu2);
		$resultado1->execute(array(":nom"=>$nombre_c,":descri"=>$descripcion_c));
		?>
		<script type="text/javascript">window.alert("Actualización Exitosa!!");window.location="consulta_categoria.php"</script>
				
		<?php

		
	   } catch(Exception $e){
			die("¡ERROR DE CONEXIÓN!" .$e->getMessage());
   
	 }

} 
?>

