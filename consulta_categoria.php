<?php
include 'conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> categoria</title>
    <link href="css/consulta_categoria.css" rel="stylesheet" media="all">
    </head>

<body>
<div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
<table>
    <td colspan="15" class="logo"><h1>CONSULTA CATEGORIA</h1></td>
       </tr>
       <tr>
          <div > <td class="input--style-2" >Nombre</td> </div>
          <div > <td class="input--style-2">Descripcion</td></div>
        </tr>
   


           <?php
           try {
              $sql5="SELECT * FROM  categoria";
               $resultado4=$base->prepare($sql5);
               $resultado4->execute(array());
               while ($consulta4=$resultado4->fetch(PDO::FETCH_ASSOC)) {
                   ?>
                   </tr>
                        <td class="input--style-2"><?php echo $consulta4['nombre_c'];?></td>
                        <td class="input--style-2"><?php echo $consulta4['descripcion_c'];?></td>
                        <td><a href="actualizar_cate.php?cod2=<?php echo $consulta4['id_categoria']?>">
                        <img src="img/R.png" width="30px" align="center"></a></td>
                        <td><a href="eliminar_cate2.php?cod1=<?php echo $consulta4['id_categoria']?>">
                        <img src="img/descarga.jpg" width="30px" align="center"></a></td>
                            <?php
               }
           }catch (excepcion $e) {
            die("¡ERROR DE CONEXIÓN!" .$e->getMessage());
        
        }
        ?>
    
    <table>
</body>

</html>
