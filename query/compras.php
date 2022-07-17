<?php 

include('conexion.php');

if(isset($_POST['pagar'])){

	$id = $_POST['id'];
	$type = $_GET['type'];

	$sqlDatos = "SELECT * FROM `$type` WHERE `id` = $id;";
	$runSqlDatos = mysqli_query($conexion, $sqlDatos);
	
	$mostrar = mysqli_fetch_array($runSqlDatos);
	$titulo = $mostrar['titulo'];
	$inventario = $mostrar['inventario'];

	$nombres = mysqli_real_escape_string($conexion,$_POST['nombres']);
	$apellidos = mysqli_real_escape_string($conexion,$_POST['apellidos']);
	$celular = mysqli_real_escape_string($conexion,$_POST['celular']);
	$correo = mysqli_real_escape_string($conexion,$_POST['correo']);
	$kTarjeta = mysqli_real_escape_string($conexion,$_POST['kTarjeta']);
	$nTarjeta = mysqli_real_escape_string($conexion,$_POST['nTarjeta']);
	$fVencimiento = mysqli_real_escape_string($conexion,$_POST['fVencimiento']);
	$cantidadProducto = mysqli_real_escape_string($conexion,$_POST['cantidadProducto']);
	$precio = mysqli_real_escape_string($conexion,$_POST['precio']);

	$precioFinal = $precio * $cantidadProducto;
	$nuevoInventario = $inventario - $cantidadProducto;

	if($nuevoInventario < 0){
		echo "

		<script>
			window.alert('Solo hay ".$inventario." unidades disponibles de este producto, por favor, intente de nuevo.');
			 history.back();
		</script>

		";
	}else{

		echo "

		<script>
			alert('El proceso de compra ha sido exitoso :), por favor, de clic en aceptar para finalizar la compra');
			 window.location = '../exito.php?type=".$type."&precioFinal=".$precioFinal."&cantidadProducto=".$cantidadProducto."';
		</script>

		";

		$sqlPedido = "INSERT INTO `pedidos` (`nombres`, `apellidos`, `celular`, `correo`, `tarjeta`, `numeroTarjeta`, `fechaVencimiento`,`cProducto`,`idProducto`, `cantidadProductos`,`total`) VALUES ('$nombres', '$apellidos', $celular, '$correo', '$kTarjeta', $nTarjeta, '$fVencimiento', '$type', $id, $cantidadProducto, $precioFinal);";
		$sqlCliente = "INSERT INTO `clientes` (`nombres`, `apellidos`, `celular`, `correo`) VALUES ('$nombres', '$apellidos', $celular, '$correo');";
		$sqlInventario = "UPDATE `$type` SET `inventario` = '$nuevoInventario' WHERE `$type`.`id` = $id;";

		$runSqlCliente = mysqli_query($conexion, $sqlCliente);
		$runSqlPedido = mysqli_query($conexion, $sqlPedido);
		$runSqlInventario = mysqli_query($conexion, $sqlInventario);



	}

}


 ?>