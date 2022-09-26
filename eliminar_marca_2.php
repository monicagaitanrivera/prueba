<?php
include 'conexion.php';

try{
    $sql5="DELETE FROM marca WHERE id_marca=".$_REQUEST['cod1'].";";
    $resultado5=$base->prepare($sql5);
    $resultado5->execute(array());
    ?>
    <script type="text/javascript">window.alert('Se elimino del sistema');
         window.location="consulta_marca.php"</script>
         <?php
}catch (excepcion $e) {
    die("¡ERROR DE CONEXIÓN!" .$e->getMessage());

       }    
 ?>
