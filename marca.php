<?php
include 'conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
 <head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">
    <!-- Title Page-->
    <title>Registro de Marca</title>
    <link href="css/Registro_marca.css" rel="stylesheet" media="all">
  </head>
<body>
   <div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
        <h1 class="logo"> REGISTRO MARCA</h1><br>
        <div class="contact-wrapper animated bounceInUp">
            <div class="contact-form">   
                <form action="" method="POST">
                <div class="input-group">
                            <input class="input--style-2" type="text"  name="txt1" placeholder="Nombre de la marca" >
                        </div>

                        <div class="input-group">
                            <input class="input--style-2" type="text"  name="txt2" placeholder="Descripcion" >
                        </div>
    <?php
                          if (isset($_POST['btn1'])) {
                            $nombre_m=$_POST['txt1'];
                            $descripcion_m=$_POST['txt2'];
                           
                            try {
                              $sql3="INSERT INTO marca (`id_marca`, `nombre_m`, `descripcion_m`)  VALUES ('',:nom,:descri)";
                              $resultado3=$base->prepare($sql3);
                              $resultado3->execute(array(':nom'=>$nombre_m,':descri'=>$descripcion_m));
                              ?>
                              <script language="javascript">window.alert('registro exitoso')</script>
                              <?php
                            
                          }catch (Excepcion $e) {
                            die("¡ERROR DE LISTA INSERCION!" .$e->getMessage());
                          
                          }
                          
                          
                        }
                        ?>
        
                     </select>
                         <div class="select-dropdown"></div>
                        </select>
                          <div class="select-dropdown"></div>
                            <div class="p-t-30">
                               <button class="btn btn--radius btn--green" type="submit" name="btn1">Registrar</button>
                          
                        </div>
                    </form>
   
       
</body>
</html>