<?php
	session_start();
		$do_final=$_SESSION['do_esc'];
		$do=$_SESSION["ses_nombre_ins"];
			/*echo "$do";*/
		
		$conexion = mysqli_connect("localhost","root","savemo425200","prosigue");
		$query = $conexion->query("SELECT * FROM usuario WHERE do_ins='$do' ");

		echo '<option value="0">Seleccione</option>';

			while ( $row = $query->fetch_assoc()){
				echo '<option value="' . $row['ze_ins']. '">' . $row['inspeccion_ins'] . '</option>' . "\n";
			} 