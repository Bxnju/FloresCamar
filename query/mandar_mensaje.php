<?php 

include('conexion.php');


if (isset($_POST['contactar'])) {


	$nombres = mysqli_real_escape_string($conexion, $_POST['nombres']);
	$correo = mysqli_real_escape_string($conexion, $_POST['correo']);
	$celular = mysqli_real_escape_string($conexion, $_POST['celular']);
	$textarea = mysqli_real_escape_string($conexion, $_POST['textarea']);

	if (!($textarea == "Escribe aquí tu mensaje")) {
		
		
		$sqlMensaje = "INSERT INTO `contacto` (`nombres`, `correo`, `celular`, `mensaje`) VALUES ('$nombres', '$correo', $celular, '$textarea');";
		$runSqlMensaje = mysqli_query($conexion, $sqlMensaje);

		if ($runSqlMensaje) {
			echo "

				<script>
					window.alert('Mensaje enviado con exito. Espere nuestra pronta respuesta.');
					 history.back();
				</script>

			";
		}

	}else{
		echo "

		<script>
			window.alert('Por favor, ingrese un mensaje antes de mandarlo.');
			 history.back();
		</script>

		";
	}

}


 ?>