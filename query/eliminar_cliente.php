<?php

   
  include("conexion.php");


  $id = $_GET['idCliente'];
 
  $actDatos = "DELETE FROM `clientes` WHERE `clientes`.`idCliente` = '$id'";
  $resultadoAct= $conexion->query($actDatos);

  if ($resultadoAct) {

    echo "<script>
    alert('Usuario eliminado correctamente del sistema');
          window.location = '../admin/clientes.php';
    </script> ";

  }else{
        
    echo "<script>
    alert('Error al intentar borrar el usuario');
              history.back();
        </script> ";

  }


?>

