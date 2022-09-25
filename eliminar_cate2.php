<?php
include "conexion.php";


try {
    $sql7="DELETE FROM categoria WHERE  id_categoria=".$_REQUEST['cod1'].";";
    $resultado7=$base->prepare($sql7);
    $resultado7->execute(array());
    ?>
    <script type="text/javascript">window.alert(' La categoria se elimino del sistema ');
         window.location="consulta_categoria.php"</script>
         <?php
}catch (excepcion $e) {
    die("¡ERROR DE CONEXIÓN!" .$e->getMessage());

       }    
 ?>
