<?php
include 'conexion.php';
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>productos</title>
    <link href="css/actualizar_pdto.css" rel="stylesheet" media="all">

    
</head>

<body>
   
<div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                    

    <form method="POST" name="frm1" action="actualizar_pdto2.php?final=<?php echo $_REQUEST['cod2'];?>"> 
    <div>
        <?php
try{
    $sqlu="SELECT * FROM productos WHERE id_pdto=".$_REQUEST['cod2'].";";
    $resultado=$base->prepare($sqlu);
    $resultado->execute(array());
    while ($consulta=$resultado->fetch(PDO::FETCH_ASSOC)) {
  ?>

           <table>
            
         <tr class="tt">
            <td colspan="2"class="logo"><h1>Actualizar Productos</h1></td>
         </tr>
         <tr>
             <td class="input--style-2">Nombre :</td>
             <td>
                <input type="text" name="txt1" class="input--style-2" required value="<?php echo $consulta['nombre_pdto']?>">
             </td>
         </tr>
         <tr>
             <td class="input--style-2">Descripcion:</td>
             <td>
                  <input type="text" name="txt2" class="input--style-2" required value="<?php  echo $consulta['descripcion']?>">
             </td>
         </tr>
         <tr>
             <td class="input--style-2">Stock:</td>
             <td>
                  <input type="number" name="txt3" class="input--style-2" required value="<?php  echo $consulta['stock']?>">
             </td>
         </tr>
         <tr>
             <td class="input--style-2">Valor:</td>
             <td>
                  <input type="number" name="txt4" class="input--style-2" required value="<?php  echo $consulta['stock']?>">
             </td>
         </tr>
         </tr> 
  <tr> 
                <td class="nombres">Categoria:</td>
             <td> 
             
  
              <?php
              $categoria=$consulta["fk_id_categoria"];
              $marca=$consulta["fk_id_marca"];
              ?>
                   <select name="txt5" class="input--style-2" required value="<?php echo $consulta["id_categoria"];?>">
                      <?php
                          try {
                           $sql1="SELECT * FROM categoria WHERE id_categoria=".$categoria.";";

                           $resultado=$base->prepare($sql1);
                           $resultado->execute(array());
                           while ($consulta=$resultado->fetch(PDO::FETCH_ASSOC)) {
                             ?>
                             <option value="<?php echo $consulta['id_categoria'];?>"><?php echo
                             $consulta['nombre_c'];?></option>
                             <?php
                           }
                          }catch (Excepcion $e) {
                            die("¡ERROR DE LISTA DESPLEGABLE!" .$e->getMessage());
                          
                          }
                           $sql1="SELECT * FROM categoria";    
                           $resultado=$base->prepare($sql1);
                           $resultado->execute(array());
                           while ($consulta=$resultado->fetch(PDO::FETCH_ASSOC)) {
                             ?>
                             <option value="<?php echo $consulta['id_categoria'];?>"><?php echo
                             $consulta['nombre_c'];?></option>
                             <?php
                           }
                          ?>
                          </select>
                         </td>
                      </tr>
                      <tr>
        
         </tr>
         <tr> 
                <td class="nombres">Marca:</td>
              <td>
              <br> <select name="txt6" class="input--style-2"  required value="<?php echo $consulta3["id_marca"]; ?> ">
                
                             
                  <?php
                                try {
                                  $sql2="SELECT * FROM marca WHERE id_marca=".$marca.";";
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
                                 $sql2="SELECT * FROM marca";
                                  $resultado2=$base->prepare($sql2);
                                  $resultado2->execute(array());
                                  while ($consulta2=$resultado2->fetch(PDO::FETCH_ASSOC)) {
                                       ?>
                                       <option value="<?php echo $consulta2["id_marca"]; ?>"><?php echo
                                           $consulta2['nombre_m'];?></option>
                                           <?php
                                  }
                                ?>
               </tr> 
              </select>
                    
                        <tr>
                        <td colspan="2"><br><br>
                        <input type="submit" name="btn1" class="btn btn--radius btn--green"value="Modificar">
                        </td>
                        </tr>
                        </table>
                        </div>
                        </form>
		
	                  
                  <?php   
                }
            }catch (excepcion $e) {
                die("¡ERROR DE CONEXIÓN!" .$e->getMessage());
            
            }    
             ?>
        

</body>

</html>
