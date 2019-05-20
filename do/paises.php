<?php

	$conexion = mysqli_connect("localhost","root","savemo425200","prosigue");
	$el_continente = $_POST['continente'];
	$query = $conexion->query("SELECT * FROM escuelas WHERE ze = $el_continente");

		echo '<option value="0">Seleccione</option>';

			while ( $row = $query->fetch_assoc() ){
				echo '<option value="' . $row['cct'] . '">' . $row['cct'] . '</option>' . "\n";
			} 