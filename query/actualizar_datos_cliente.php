<?php
   
   include("conexion.php");

   if(isset($_POST["actualizar_datos"])){

    $idCliente = mysqli_real_escape_string($conexion,$_POST['id']);
    $nombres= mysqli_real_escape_string($conexion,$_POST['nombres']);
    $apellidos= mysqli_real_escape_string($conexion,$_POST['apellidos']);
    $celular= mysqli_real_escape_string($conexion,$_POST['celular']);
    $correo= mysqli_real_escape_string($conexion,$_POST['correo']);

   $actDatos = "UPDATE `clientes` SET  nombres = '$nombres', apellidos = '$apellidos', celular = $celular, correo = '$correo' WHERE `clientes`.`idCliente` = '$idCliente'";
   $resultadoAct= $conexion->query($actDatos);

   if ($resultadoAct) {


    echo "<script>
    alert('Los datos del usuario han sido actualizados exitosamente.');
    window.location = '../admin/clientes.php';
    </script> ";


        }else{
        
    echo "<script>
    alert('Error en la actualizacion de los datos');
              history.back();
        </script> ";


        }

   }

   ?>

   