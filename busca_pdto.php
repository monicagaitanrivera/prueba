<?php
include "conexion.php"
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Busqueda</title>
    <link rel="stylesheet" href="css/consulta_categoria.css">
  </head>
  <body>
 
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
    <form method="POST" name="" action="">
    <div>
   
<table>
<h1 class="logo"> Funcion Buscar Producto</h1><br>  
             <div class="input-group">
                            <input class="input--style-2" type="text"  name="busqueda" placeholder="Buscar" >
                        </div>
         </tr>   
           <tr>
             <td colspan="2">
             <div class="select-dropdown"></div>
                   <div class="p-t-30">
             <input class="btn btn--radius btn--green"  type="submit" name="enviar" class="boton" value="Enviar">
            </td>
</tr>
         </form>
         
         <?php
 
 if (isset($_POST["enviar"])){

   $buscar=$_POST["busqueda"];
   if ($buscar != "") {
    
    ?>
    
    <table width="400px">
    <tr>
    <br><td class="input--style-2"> Nombre</td>
      <td class="input--style-2"> Descripcion </td>
      <td class="input--style-2"> Stock</td>
      <td class="input--style-2"> Valor</td>
      <td class="input--style-2"> Categoria</td>
      <td class="input--style-2"> Marca</td>
                        </tr>
  
    
  <?php
  try {
    $sql="SELECT * FROM productos INNER JOIN categoria ON productos.fk_id_categoria=categoria.id_categoria INNER JOIN marca ON productos.fk_id_marca=marca.id_marca";
    $resultado = $base->prepare($sql);
    $resultado -> execute(array($buscar));
    $contador = $resultado -> rowCount();
     if ($contador >= 1) {
      while ($consulta = $resultado->fetch(PDO:: FETCH_ASSOC)){
        ?>
        <tr>
          <td class="box2"><?php echo $consulta["nombre_m"];?> </td>
            <td class="box2"><?php echo $consulta["descripcion"];?> </td>
            <td class="box2"><?php echo $consulta["stock"];?> </td>
            <td class="box2"><?php echo $consulta["valor"];?> </td>
            <td class="box2"><?php echo $consulta["fk_id_categoria"];?> </td>
            <td class="box2"><?php echo $consulta["fk_id_marca"];?> </td>
          
         
        </tr>
        <?php
      }

      }else{

        ?>
        <label>
          <?php

          echo"<center>Por favor verifiqu?? la informaci??n no se encontraron datos ...</center>";

             }

              } catch(Exception $e){
               die("??ALERTA!!! Error al ejecutar la busqueda..." .$e->getMessage());
      
        }
    }else{
      ?>
      <label>
        <?php
         echo"<center> Ingrese un dato a buscar...</center>";
          ?>
        </label>
        <?php
      }
    } 
   ?>
</table>
           <br><a href="busca_marca.php" class="input--style-2">Regresar a la consulta</a>  
                      
  </body>
  </html>