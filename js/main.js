
	function navbar(){
		let navbar = document.getElementById('navbar');
		let logo = document.getElementById('logo');
		let number = document.querySelector("div.up h3[class='number']");
		let location = document.querySelector("div.up span[class='location']");
		let slogan = document.querySelector("div.down h3[class='slogan']");
		let hr = document.getElementById('navbar__divisor');
		logo.style.width = '15%';
		navbar.style.position = "sticky";
		navbar.style.top = 0;
		navbar.style.fontSize = '1em';
		navbar.style.flexDirection = 'row';
		navbar.style.padding = 0;
		number.style.display = 'none';
		location.style.display = 'none';
		slogan.style.display = 'none';
		hr.style.display = 'none';
	}

	window.addEventListener("scroll", navbar);

	function eliminarCliente(idCliente){
		if (window.confirm("Quiere eliminar al usuario seleccionado?")) {
  			window.location = ("../query/eliminar_cliente.php?idCliente=" + idCliente);
		}
	}

	function eliminarBouquet(idProducto){

		if (window.confirm("Quiere eliminar al producto seleccionado?")) {
  			window.location = ("../query/eliminar_producto.php?id=" + idProducto + "&tipo=bouquets");
		}
	}

	function eliminarFunebre(idProducto){

		if (window.confirm("Quiere eliminar al producto seleccionado?")) {
  			window.location = ("../query/eliminar_producto.php?id=" + idProducto + "&tipo=funebres");
		}
	}

	function eliminarTropical(idProducto){

		if (window.confirm("Quiere eliminar al producto seleccionado?")) {
  			window.location = ("../query/eliminar_producto.php?id=" + idProducto + "&tipo=tropicales");
		}
	}

	function eliminarExclusivo(idProducto){

		if (window.confirm("Quiere eliminar al producto seleccionado?")) {
  			window.location = ("../query/eliminar_producto.php?id=" + idProducto + "&tipo=exclusivos");
		}
	}