<?php
include 'conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">
    <title>Registro </title>
    <link href="css/Registro_producto.css" rel="stylesheet" media="all">
</head>
<body>
   
<div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
        <h1 class="logo"> REGISTRO PRODUCTO</h1> 
                <form action="" method="POST">
                <div class="input-group">
                            <input class="input--style-2" type="text"  name="txt1" placeholder="Digite el nombre" >
                        </div>
                        <div class="input-group">
                            <input class="input--style-2" type="text"  name="txt2" placeholder="Descripcion" >
                        </div>

                        <div class="input-group">
                            <input class="input--style-2" type="number"  name="txt3" placeholder="Stock" >
                        </div>
                        <div class="input-group">
                            <input class="input--style-2" type="number"  name="txt4" placeholder="valor" >
                        </div>
                        <tr>
                      
                        <td>Categoria:</td>
                       
                             <select name="txt5" class="input--style-2"> 
                                <?php
                                try {
                                  $sql2="SELECT * FROM categoria";
                                  $resultado2=$base->prepare($sql2);
                                  $resultado2->execute(array());
                                  while ($consulta2=$resultado2->fetch(PDO::FETCH_ASSOC)) {
                                       ?>
                                       <option value="<?php echo $consulta2["id_categoria"]; ?>"><?php echo
                                           $consulta2['nombre_c'];?></option>
                                           <?php
                                  }
                                }catch (Excepcion $e) {
                                  die("¡ERROR DE LA LISTA DESPLEGABLE!" .$e->getMessage());
                                
                                }
                                ?>
                              </select>
                            </td>
                          </tr>
                      <tr>
                      <br><br><td >Marca:</td>
                         <td>
                         <select name="txt6" class="input--style-2"> 
                                <?php
                                try {
                                  $sql2="SELECT * FROM marca";
                                  $resultado2=$base->prepare($sql2);
                                  $resultado2->execute(array());
                                  while ($consulta2=$resultado2->fetch(PDO::FETCH_ASSOC)) {
                                       ?>
                                       <option value="<?php echo $consulta2["id_marca"]; ?>"><?php echo
                                           $consulta2['nombre_m'];?></option>
                                           <?php
                                  }
                                }catch (Excepcion $e) {
                                  die("¡ERROR DE LA LISTA DESPLEGABLE!" .$e->getMessage());
                                
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
<?php
                          if (isset($_POST['btn1'])) {
                            $nombre=$_POST['txt1'];
                            $descripcion=$_POST['txt2'];
                            $stock=$_POST['txt3'];
                            $valor=$_POST['txt4'];
                            $categoria=$_POST['txt5'];
                            $marca=$_POST['txt6'];
                            try {
                              $sql3="INSERT INTO productos(`id_pdto`, `nombre_pdto`, `descripcion`, `stock`, `valor`, `fk_id_categoria`, `fk_id_marca`) VALUES ('',:nom,:descrip,:tok,:val,:cater,:mar)";
                              $resultado3=$base->prepare($sql3);
                              $resultado3->execute(array(':nom'=>$nombre,':descrip'=>$descripcion,':tok'=>
                                $stock,':val'=>$valor,':cater'=>$categoria,':mar'=>$marca));
                              ?>
                              <script language="javascript">window.alert('datos registrados exitosamente')</script>
                              <?php
                            
                          }catch (Excepcion $e) {
                            die("¡ERROR DE LISTA INSERCION!" .$e->getMessage());
                          
                          }
                          
                          
                        }
                        ?>
