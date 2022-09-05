<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="img/png" href="./imgs/rosa.png">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/pagar.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	<title>Checkout | Flores Camar SAS</title>
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

<!-- <div class="f">
	<div class="f__img"></div>
	<div class="f__info">
		<div class="f__info-i">
			<h2>Croseta de Mariscos</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua.</p>
		</div>
		<div class="f__info-c">
			<h2>Contenido:</h2>
			<ul>
				<li>Rosas</li>
				<li>Amapolas</li>
				<li>Girasoles</li>
				<li>Croquetas</li>
			</ul>
		</div>
		<div class="f__info-p">
			<h1>$ 320.000 COP</h1>
		</div>
	</div>
	<div class="f__form">
		<h1>formulario de compra</h1>
		<form action="" class="f__form-f">
			
			<div>
				<input type="text" placeholder="Nombres" name="nombres">
				<input type="text" placeholder="Apellidos" name="apellidos">
				<input type="number" placeholder="Celular" name="celular">
			</div>

			<div>
				<input type="email" placeholder="Email" name="email">
				<select name="kTarjeta">
					<option selected disabled>Selecciona el tipo de tarjeta</option>
					<option>VISA</option>
					<option>MASTERCARD</option>
					<option>BBVA</option>
					<option>BANCOLOMBIA</option>
					<option>BANCO DE BOGOTA</option>
				</select>
				<input type="number" placeholder="Numero de Tarjeta" name="nTarjeta">
			</div>

			<div>
				<input type="text" placeholder="Fecha de Vencimiento de Tarjeta" onfocus="(this.type='date')" name="fVencimiento">
				<input type="number" min="1" placeholder="Cantidad de Productos" name="inventario">
				<input type="submit" value="Pagar" name="pagar">
			</div>

		</form>
	</div>
</div> -->


	<?php 

	include('query/conexion.php');

	$type = $_GET['type'];
	$id = $_GET['id'];
	$sql = 'SELECT * FROM '.$type.' WHERE id = '.$id.';';
	$result = mysqli_query($conexion,$sql);


	while ($mostrar=mysqli_fetch_array($result)) {


		$titulo = $mostrar['titulo'];
		$descripcion = $mostrar['descripcion'];
		$caracteristica1 = $mostrar['caracteristica1'];
		$caracteristica2 = $mostrar['caracteristica2'];
		$caracteristica3 = $mostrar['caracteristica3'];
		$caracteristica4 = $mostrar['caracteristica4'];
		$precioPantalla = $mostrar['precioPantalla'];
		$precio = $mostrar['precio'];
		$inventario = $mostrar['inventario'];
		$img = $mostrar['img'];

		if($caracteristica1 == NULL){
			$caracteristica1 = "...";
		}if($caracteristica2 == NULL){
			$caracteristica2 = "...";
		}if($caracteristica3 == NULL){
			$caracteristica3 = "...";
		}if($caracteristica4 == NULL){
			$caracteristica4 = "...";
		}

		echo '


<div class="f">
	<div class="f__img" style="background-image: url('.$img.');"></div>
	<div class="f__info">
		<div class="f__info-i">
			<h2>'.$titulo.'</h2>
			<p>'.$descripcion.'</p>
		</div>
		<div class="f__info-c">
			<h2>Contenido:</h2>
			<ul>
				<li>'.$caracteristica1.'</li>
				<li>'.$caracteristica2.'</li>
				<li>'.$caracteristica3.'</li>
				<li>'.$caracteristica4.'</li>
			</ul>
		</div>
		<div class="f__info-p">
			<h1>$ '.$precioPantalla.' COP</h1>
		</div>
	</div>
	<div class="f__form">
		<h1>formulario de compra</h1>
		<form action="query/compras.php?type='.$type.'" method="POST" class="f__form-f">
			
			<div>
				<input type="text" placeholder="Nombres" name="nombres" required>
				<input type="text" placeholder="Apellidos" name="apellidos" required>
				<input type="number" min="3000000000" max="4000000000" placeholder="Celular" name="celular" required>
			</div>

			<div>
				<input type="email" placeholder="Email" name="correo" required>
				<select name="kTarjeta" required>
					<option selected disabled>Selecciona el tipo de tarjeta</option>
					<option>VISA</option>
					<option>MASTERCARD</option>
					<option>BBVA</option>
					<option>BANCOLOMBIA</option>
					<option>BANCO DE BOGOTA</option>
				</select>
				<input type="number" placeholder="Numero de Tarjeta" name="nTarjeta" required>
			</div>

			<div>
				<input type="text" placeholder="Fecha de Vencimiento de Tarjeta" onfocus="(this.type=&quot;date&quot;)" name="fVencimiento" required>
				<input type="number" min="1" value="" placeholder="Cantidad de Productos (Disponibles: '.$inventario.')" name="cantidadProducto" required>

				<input type="number" style="display: none;" value="'.$id.'" name="id">
				<input type="number" style="display: none;" value="'.$precio.'" name="precio">

				<input type="submit" value="Pagar" name="pagar">
			</div>

		</form>
	</div>
</div>



		';

	}


	 ?>


<!-- background-image: url('.$mostrar['img'].'); -->

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