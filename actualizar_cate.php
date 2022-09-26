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
    <title>categoria</title>
    <link href="css/actualizar_cate.css" rel="stylesheet" media="all">

    
</head>

<body>
   
<div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">

	<?php
	try{
		$sqlu="SELECT * FROM categoria  WHERE  id_categoria=".$_REQUEST['cod2'].";";
		$resultado=$base->prepare($sqlu);
		$resultado->execute(array());
		while ($consulta3=$resultado->fetch(PDO::FETCH_ASSOC)){
		         ?><section>
           <form method="POST" name="frm1" action="actualizar_cate2.php?final=<?php echo $_REQUEST['cod2'] ;?>">
            <div>
           <table>
            
         <tr class="tt">
            <td colspan="2"class="logo"><h1>Actualizar Categoria</h1></td>
         </tr>
         <tr>
             <td class="input--style-2">Nombre Marca:</td>
             <td>
                <input type="text" name="txt1" class="input--style-2" required value="<?php echo $consulta3['nombre_c']?>">
             </td>
         </tr>
         <tr>
             <td class="input--style-2">Descripcion:</td>
             <td>
                  <input type="text" name="txt2" class="input--style-2" required value="<?php  echo $consulta3['descripcion_c']?>">
             </td>
         </tr>

               </tr> 
              </select>
                    
                        <tr>
                        <td colspan="2">
                        <input type="submit" name="btn1" class="btn btn--radius btn--green"value="modificar">
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
