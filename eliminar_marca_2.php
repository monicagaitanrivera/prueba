<?php
include "conexion.php";


try {
    $sql7="DELETE FROM marca WHERE  id_marca=".$_REQUEST['cod2'].";";
    $resultado7=$base->prepare($sql7);
    $resultado7->execute(array());
    ?>
    <script type="text/javascript">window.alert(' La marca se elimino del sistema ');
         window.location="consulta_marca.php"</script>
         <?php
}catch (excepcion $e) {
    die("¡ERROR DE CONEXIÓN!" .$e->getMessage());

       }    
 ?>
