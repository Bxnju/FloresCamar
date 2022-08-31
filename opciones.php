<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/opciones.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	<title>Catalogo | Flores Camar SAS</title>
	<script type="text/javascript" src="js/main.js"></script>
</head>

<header id="navbar">
	<div class="up">
		<h3 class="number"><i class="fa-solid fa-phone"></i> (+57) 312 272 3581</h3>
		<img id="logo" class="logo" alt="logo flores camar sas" src="imgs/logo-nobg.png">
		<span class="location"><i class="fa-solid fa-location-dot"></i> Cra. 83 #n19-32, Medellin, Colombia.</span>
	</div>
	<hr id="navbar__divisor">
	<div class="down">
		<h3 class="slogan">Vive la magia de las flores...</h3>
	<nav>
		<a class="active__link" href="index.html">Inicio</a>
		<a href="catalogo.html">Catalogo</a>
		<a href="contactanos.html">Contactanos</a>
		<a href="nosotros.html">Sobre nosotros</a>
	</nav>
	</div>
</header>

<body>

<div class="flex-center flex-r my-2">
	<?php 

	include('query/conexion.php');

	$type = $_GET['type'];
	$sql = 'SELECT * FROM '.$type.';';
	$result = mysqli_query($conexion,$sql);


	while ($mostrar=mysqli_fetch_array($result)) {

		if ($mostrar['inventario'] == 0) {
			continue;
		}

		echo '


		<a class="product__link" href="pagar.php?type='.$type.'&id='.$mostrar['id'].'">
		<div class="product__card">
			<div class="product__card-header">
				<img src="'.$mostrar['img'].'" class="product__img">		
			</div>
			<div class="product__card-body">
				<h3>'.$mostrar['titulo'].'</h3>
				<p class="product__price"> $ '.$mostrar['precioPantalla'].' COP</p>
				<a href="pagar.php?type='.$type.'&id='.$mostrar['id'].'" class="product__card-btn">Ver mas y comprar</a>
			</div>
		</div>
	</a>


		';

	}
	 ?>

</div>



<a class="whatsapp" href="https://api.whatsapp.com/send?phone=573122723581&text=Hola,%20quiero%20realizar%20un%20pedido."><i class="fa-brands fa-whatsapp" title="Escribenos a nuestro Whatsapp!"></i></a>


</body>

<footer class="footer">
	<div class="footer__up">
		<div class="footer__info">
			<h2>INFORMACION GENERAL</h2>
			<span>Numero Celular: (+57) 3012031212</span>
			<span>Numero Fijo: (604) 3341212</span>
			<span>Direccion Medellin: Cra 83 #42a</span>
			<span>Horario y atencion: Lunes-Sabado, 8:00am-8:00pm</span>
		</div>
		<div class="footer__newsletter">
			<h2>NEWSLETTER</h2>
			<input type="email" placeholder="Ingresa tu correo para recibir ofertas" name="">
			<a href="" class="btn btn__2">Suscribirme!</a>
		</div>
		<div class="footer__redes">
			<a class="footer__redes-whatsapp"><i class="fa-brands fa-whatsapp"></i></a>
			<a class="footer__redes-facebook"><i class="fa-brands fa-facebook-f"></i></a>
			<a class="footer__redes-instagram"><i class="fa-brands fa-instagram"></i></a>
		</div>
	</div>
	<div class="footer__down">
		<div class="footer__derechos">
			<h3>Copyright 2022  Flores Camar SAS | Todos los derechos reservados</h3>
		</div>
		<div class="footer__tarjetas">
			<img src="https://www.floresbogota.net/pub/media/wysiwyg/smartwave/porto/footer/shop2_payment_logo.png">
		</div>
	</div>
</footer>

</html>