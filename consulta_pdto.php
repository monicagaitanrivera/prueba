<?php
include 'conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> producto</title>
    <link href="css/consulta_pdto.css" rel="stylesheet" media="all">
</head>

<body>
<div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                <table>
    <tr>
    <td colspan="15" class="logo"><h1>CONSULTA PRODUCTOS</h1></td>
</tr>

       <tr >
          <div > <td class="input--style-2">Nombre </td> </div>
          <div > <td class="input--style-2">Descripcion </td></div>
          <div > <td class="input--style-2">Stock </td> </div>
          <div > <td class="input--style-2">valor </td></div>
          <div > <td class="input--style-2">Categoria </td> </div>
          <div > <td class="input--style-2">Marca </td></div>
        </tr>

   

        <?php
           try {
            $sqll="SELECT * FROM productos INNER JOIN categoria ON productos.fk_id_categoria=categoria.id_categoria INNER JOIN marca ON productos.fk_id_marca=marca.id_marca";
               $resultado4=$base->prepare($sqll);
               $resultado4->execute(array());
               while ($consulta4=$resultado4->fetch(PDO::FETCH_ASSOC)) {
                   ?>
                   </tr>
                        <td class="input--style-2"><?php echo $consulta4['nombre_pdto'];?></td>
                        <td class="input--style-2"><?php echo $consulta4['descripcion'];?></td>
                         <td class="input--style-2"><?php echo $consulta4['stock'];?></td>
                         <td class="input--style-2"><?php echo $consulta4['valor'];?></td>
                         <td class="input--style-2"><?php echo $consulta4['nombre_c'];?></td>
                         <td class="input--style-2"><?php echo $consulta4['nombre_m'];?></td>
                         <td><a href="actualizar_pdto.php?cod2=<?php echo $consulta4['id_pdto']?>">
                        <img src="img/R.png" width="30px" align="center"></a></td>
                        <td><a href="eliminar_pdto2.php?cod2=<?php echo $consulta4['id_pdto']?>">
                        <img src="img/descarga.jpg" width="30px" align="center"></a></td>
                            <?php
               }
           }catch (excepcion $e) {
            die("¡ERROR DE CONEXIÓN!" .$e->getMessage());
         }
        ?>
         
</body>
</html>
