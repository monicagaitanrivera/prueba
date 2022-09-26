<?php
include 'conexion.php';

try{
    $sql5="DELETE FROM productos WHERE id_pdto=".$_REQUEST['cod2'].";";
    $resultado5=$base->prepare($sql5);
    $resultado5->execute(array());
    ?>
    <script type="text/javascript">window.alert('Se elimino del sistema');
         window.location="consulta_pdto.php"</script>
         <?php
}catch (excepcion $e) {
    die("¡ERROR DE CONEXIÓN!" .$e->getMessage());

       }    
 ?>
