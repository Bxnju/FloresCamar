<?php

   
  include("conexion.php");


  $id = $_GET['id'];
  $tipo = $_GET['tipo'];
 
  $actDatos = "DELETE FROM `$tipo` WHERE `$tipo`.`id` = '$id'";
  $resultadoAct= $conexion->query($actDatos);

  if ($resultadoAct) {

    echo "<script>
    alert('Producto eliminado correctamente del sistema');
          window.location = '../admin/".$tipo.".php';
    </script> ";

  }else{
        
    echo "<script>
    alert('Error al intentar borrar el producto');
              history.back();
        </script> ";

  }


?>

