<?php
    // session_start();

    // if(!isset($_SESSION['id_admin'])){
    // echo "<script>
    // alert('No ha iniciado sesion como administrador');
    // window.location = 'login.php';
    // </script>";
    // }

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="img/png" href="./imgs/rosa.png">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<link rel="stylesheet" type="text/css" href="../css/login.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

	<script type="text/javascript" src="../js/main.js"></script>

	<title>Inicio | Flores Camar SAS</title>
</head>

<header id="navbar">
	<div class="up">
		<h3 class="number"><i class="fa-solid fa-phone"></i> (+57) 312 272 3581</h3>
		<img id="logo" class="logo" alt="logo flores camar sas" src="../imgs/logo-nobg.png">
		<span class="location"><i class="fa-solid fa-location-dot"></i> Cra. 83 #n19-32, Medellin, Colombia.</span>
	</div>
	<hr id="navbar__divisor">
	<div class="down">
		<h3 class="slogan">Vive la magia de las flores...</h3>
	<nav>
		<a href="../index.php">Inicio</a>
		<a href="../catalogo.php">Productos</a>
		<a href="../contactanos.php">Clientes</a>
		<a class="active__link" href="logout.php">Logout <i class="fa-solid fa-right-from-bracket"></i></a>
	</nav>
	</div>
</header>

<body>

	


<a class="whatsapp" href="https://api.whatsapp.com/send?phone=573122723581&text=Hola,%20quiero%20realizar%20un%20pedido."><i class="fa-brands fa-whatsapp" title="Escribenos a nuestro Whatsapp!"></i></a>


</body>

<footer class="footer">
	<div class="footer__up">
		<div class="footer__info">
			<h2>INFORMACION GENERAL</h2>
			<span>Numero Celular: (+57) 3012031212</span>
			<span>Numero Fijo: (604) 3341212</span>
			<span>Direccion Medellin: Cra. 83 #n19-32.</span>
			<span>Horario y atencion: Lunes-Sabado, 8:00am-8:00pm; Domingo, 8:00am-4:00pm</span>
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