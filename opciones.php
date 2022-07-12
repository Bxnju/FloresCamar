<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/catalogo.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	<title>Catalogo | Flores Camar SAS</title>
	<script type="text/javascript" src="js/main.js"></script>
</head>

<header id="navbar">
	<div class="up">
		<h3 class="number"><i class="fa-solid fa-phone"></i> (+57) 311-332-2312</h3>
		<img id="logo" class="logo" alt="logo flores camar sas" src="imgs/logo-nobg.png">
		<span class="location"><i class="fa-solid fa-location-dot"></i> Cra 83 44-3 Medellin, Colombia.</span>
	</div>
	<div class="down">
		<h3 class="slogan">Jugando con tus sentimientos...</h3>
	<nav>
		<a class="active__link" href="index.html">Inicio</a>
		<a href="catalogo.html">Catalogo</a>
		<a href="exclusivos.php">Exclusivos</a>
		<a href="contactanos.html">Contactanos</a>
		<a href="nosotros.html">Sobre nosotros</a>
	</nav>
	</div>
</header>

<body>


	<?php 

	include('query/conexion.php');

	$sql = 'SELECT * FROM `funebres` WHERE id = 1';
	$result = mysqli_query($conexion,$sql);

	while ($mostrar=mysqli_fetch_array($result)) {
		echo '

		
		<img style="width: 50%;" src="'.$mostrar['img'].'">



		';

	}
	 ?>


</body>
</html>