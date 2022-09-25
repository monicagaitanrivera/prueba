<?php
include 'conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> marca</title>
  
    <link rel="stylesheet" type="text/css" href="css/libros.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet" /> <!-- https://fonts.google.com/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet" /> <!-- https://getbootstrap.com/ -->
    <link href="css/consulta_marca.css" rel="stylesheet" media="all">
    </head>

<body>
<div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
<table>
    <tr class="tt">
    <td colspan="15" class="logo"><h1>CONSULTA MARCA</h1></td>
       </tr>
         <div class="row row-cols-3">
       <tr>
          <div class="col"> <td class="input--style-2" >Nombre</td> </div>
          <div class="col"> <td class="input--style-2">Descripcion</td></div>
        </tr>
   


           <?php
           try {
              $sql5="SELECT * FROM  marca";
               $resultado4=$base->prepare($sql5);
               $resultado4->execute(array());
               while ($consulta4=$resultado4->fetch(PDO::FETCH_ASSOC)) {
                   ?>
                   </tr>
                        <td class="input--style-2"><?php echo $consulta4['nombre_m'];?></td>
                        <td class="input--style-2"><?php echo $consulta4['descripcion_m'];?></td>
                        <td><a href="actualizar_marca.php?cod2=<?php echo $consulta4['id_marca']?>">
                        <img src="img/R.png" width="30px" align="center"></a></td>
                        <td><a href="eliminar_marca_2.php?cod2=<?php echo $consulta4['id_marca']?>">
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
