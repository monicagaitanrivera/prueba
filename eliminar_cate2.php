<?php
include 'conexion.php';

try{
    $sql5="DELETE FROM categoria WHERE id_categoria=".$_REQUEST['cod1'].";";
    $resultado5=$base->prepare($sql5);
    $resultado5->execute(array());
    ?>
    <script type="text/javascript">window.alert('Se elimino del sistema');
         window.location="consulta_categoria.php"</script>
         <?php
}catch (excepcion $e) {
    die("¡ERROR DE CONEXIÓN!" .$e->getMessage());

       }    
 ?>
