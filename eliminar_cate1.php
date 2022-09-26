<?php
include "conexion.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminacion </title>
    <link rel="stylesheet" href="css/conectar-au.css">
</head>
<body>
<div>
     <table>
       <tr class="tt">
            <td colspan="3" class="titulo">.....Eliminando Categoria....</td>
           
       </tr>
           <?php
            try{
                $sql4="SELECT * FROM categoria WHERE id_categoria=".$_REQUEST['cod'].";";
                $resultado4=$base->prepare($sql4);
                $resultado4->execute(array());
                while ($consulta4=$resultado4->fetch(PDO::FETCH_ASSOC)){
                    ?>
                    <tr>
                    <td class="titulo"><?php echo " usted esta seguro de querer eliminar 
                    la categoria ".$consulta4['nombre_c']; ?></td></tr>
                    <tr>
                      <td>
                       <a href="eliminar_cate2.php?cod1=<?php echo $_REQUEST['cod']?>">
                       <img src="img/si.png" width="50px"></a>
                       <a href ="javascript:history.go(-1)"><img src="img/no.png"
                       width="55px"></a>
                      </td>
                    </tr>
                    <?php   
                }
            }catch (excepcion $e) {
                die("¡ERROR DE CONEXIÓN!" .$e->getMessage());
            
            }    
             ?>
       </table>
       </div>                 
</body>
</html>