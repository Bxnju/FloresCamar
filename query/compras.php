<?php 

include('conexion.php');

if(isset($_POST['pagar'])){

	$id = $_POST['id'];
	$type = $_GET['type'];
	$nombres = mysqli_real_escape_string($conexion,$_POST['nombres']);
	$apellidos = mysqli_real_escape_string($conexion,$_POST['apellidos']);
	$celular = mysqli_real_escape_string($conexion,$_POST['celular']);
	$correo = mysqli_real_escape_string($conexion,$_POST['correo']);
	$kTarjeta = mysqli_real_escape_string($conexion,$_POST['kTarjeta']);
	$nTarjeta = mysqli_real_escape_string($conexion,$_POST['nTarjeta']);
	$fVencimiento = mysqli_real_escape_string($conexion,$_POST['fVencimiento']);
	$inventario = mysqli_real_escape_string($conexion,$_POST['inventario']);
	$precio = mysqli_real_escape_string($conexion,$_POST['precio']);

	$precioFinal = $precio * $inventario;

	$sqlPedido = "INSERT INTO `pedidos` (`nombres`, `apellidos`, `celular`, `correo`, `tarjeta`, `numeroTarjeta`, `fechaVencimiento`, `cantidadProductos`) VALUES ('$nombres', '$apellidos', $celular, '$correo', '$kTarjeta', $nTarjeta, '$fVencimiento', $inventario);";
	$runSqlPedido = mysqli_query($conexion, $sqlPedido);

}


 ?>