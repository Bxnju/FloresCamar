<?php
   
   include("conexion.php");

   if(isset($_POST["actualizar_datos"])){

    $id = mysqli_real_escape_string($conexion,$_POST['id']);
    $tipo = mysqli_real_escape_string($conexion,$_POST['tipo']);
    $titulo= mysqli_real_escape_string($conexion,$_POST['titulo']);
    $precio= mysqli_real_escape_string($conexion,$_POST['precio']);
    $inventario= mysqli_real_escape_string($conexion,$_POST['inventario']);

   $actDatos = "UPDATE `$tipo` SET  titulo = '$titulo', precio = '$precio', inventario = $inventario WHERE `$tipo`.`id` = $id";
   $resultadoAct= $conexion->query($actDatos);

   if ($resultadoAct) {


    echo "<script>
    alert('Los datos del producto han sido actualizados exitosamente.');
    window.location = '../admin/".$tipo.".php';
    </script>";


        }else{
        
    echo "<script>
    alert('Error en la actualizacion de los datos'".$tipo.");
              history.back();
        </script> ";


        }

   }

   ?>

   