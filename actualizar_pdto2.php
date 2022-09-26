<?php
include "conexion.php";

    if(isset($_POST['btn1'])){
        $nombre_pdto=$_POST['txt1'];
         $descripcion=$_POST['txt2'];
          $stock=$_POST['txt3'];
        $valor=$_POST['txt4'];
        $fk_id_categoria=$_POST['txt5'];
        $fk_id_marca=$_POST['txt6'];
       

        try{
            $sqlu2=" UPDATE productos SET nombre_pdto=:nom, descripcion=:descrip, stock=:tok, valor=:val, fk_id_categoria=:cate, fk_id_marca=:mar   WHERE id_pdto=".$_REQUEST['final'].";";
            $resultado1=$base->prepare($sqlu2);
            $resultado1->execute(array(":nom"=>$nombre_pdto,  ":descrip"=>$descripcion, ":tok"=>$stock, ":val"=>$valor, ":cate"=>$fk_id_categoria, ":mar"=>$fk_id_marca ));
            ?>
            <script type="text/javascript">window.alert("Actualización Exitosa!!");window.location="consulta_pdto.php"</script>
                    
            <?php
        
            
           } catch(Exception $e){
                die("¡ERROR DE CONEXIÓN!" .$e->getMessage());
       
         }
 
    } // 
 ?>