<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="img/png" href="./imgs/rosa.png">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/exito.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	<title>Exclusivos | Flores Camar SAS</title>
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



	<!-- <div class="alerta">
			<div class="alerta__header">
				<h2>Hecho!</h2><i class="fa-solid fa-check"></i>
			</div>
			<div class="alerta__body">
				<div class="datos">
					<div class="nombres">
						<i class="fa-solid fa-user"></i>
						<h4>'.strtoupper($nombres).'</h4>
					</div>
					<div class="tipo">
						<i class="fa-brands fa-pagelines"></i>
						<h4>'.strtoupper($tipo).'</h4>
					</div>
					<div class="cantidad">
						<i class="fa-solid fa-list-ol"></i>
						<h4>'.$cantidadProducto.'</h4>
					</div>
					<div class="precio">
						<i class="fa-solid fa-dollar-sign"></i>
						<h4>'.$precioFinal.'</h4>
					</div>
				</div>
				<div class="fecha">	
					<i class="fa-solid fa-calendar-days"></i>
					<h4>'.$fecha.'</h4>
				</div>
			</div>
		</div> -->


<?php 

	date_default_timezone_set('UTC-5');

	include('./query/conexion.php');

	$nombres = $_GET['name'];
	$tipo = $_GET['type'];
	$precioFinal = $_GET['precioFinal'];
	$cantidadProducto  = $_GET['cantidadProducto'];
	$horaColombia = date(h) - 5;
	$fecha = date('l jS \of F Y '.$horaColombia.':i:s A');


	echo '


		<div class="alerta">
			<div class="alerta__header">
				<h2>Hecho!</h2><i class="fa-solid fa-check"></i>
			</div>
			<div class="alerta__body">
				<div class="datos">
					<div class="left">
						<div class="nombres">
						<i class="fa-solid fa-user"></i>
						<h4>NOMBRES: '.strtoupper($nombres).'</h4>
						</div>
						<div class="tipo">
							<i class="fa-brands fa-pagelines"></i>
							<h4>TIPO DE PRODUCTO: '.strtoupper($tipo).'</h4>
						</div>
					</div>
					<div class="right">
						<div class="cantidad">
						<i class="fa-solid fa-list-ol"></i>
						<h4>CANTIDAD: '.$cantidadProducto.'</h4>
						</div>
						<div class="precio">
							<h4>PRECIO FINAL: $ '.$precioFinal.' COP</h4>
						</div>
					</div>
				</div>
				<div class="fecha">	
					<i class="fa-solid fa-calendar-days"></i>
					<h4>FECHA DE COMPRA: '.$fecha.'</h4>
				</div>
			</div>
		</div>



	';

 ?>


<a class="whatsapp" href="https://api.whatsapp.com/send?phone=573122723581&text=Hola,%20quiero%20realizar%20un%20pedido."><i class="fa-brands fa-whatsapp" title="Escribenos a nuestro Whatsapp!"></i></a>

</body>

<footer class="footer">
	<div class="footer__up">
		<div class="footer__info">
			<h2>INFORMACION GENERAL</h2>
			<span>Numero Celular: (+57) 3012031212</span>
			<span>Numero Fijo: (604) 3341212</span>
			<span>Direccion Medellin: Cra. 83 #n19-32.</span>
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