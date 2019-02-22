<!DOCTYPE html> 
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui">
	<title>ADMIN</title>
	<link rel="stylesheet" href="../css/estilos.css">
	<link rel="stylesheet" type="text/css" href="../css/index.css">
	<link rel="shortcut icon" href="../Complementos/Icon.png" type="image/x-icon">
		<style>
			.formulario {
				background-color: rgba(143, 141, 130, 0.85);
			}
			.text{
				text-align: right;
				color: #fff;
				padding-top: 10px;
				padding-right: 20px;
				font-size: .8rem;
			}
			.logo2 {
				width: 50px;
				float: left;
				padding: 10px 30px;
			}
			.formulario__submit{
				text-align: center;
			}
			a{ 
				text-decoration:none; 
				color: #fff;
			} 
		</style>
</head>
	<body>
		<div>
			<div><a class="logo2"><img src="../Complementos/SEP4.png" alt="SEP"></a></div>
			<div class="text"><p>Autoridad Educativa Federal en la Ciudad de México<br>
				Dirección General de Operación de Servicios Educativos<br>
				Coordinación Sectorial de Educación Secundaria<br>
				Subdirección de Apoyo Técnico Complementario</p></div>
		</div>
			<div class="video">
				<video src="../Complementos/Video2.mp4" autoplay loop></video>
			</div>
				<form action="login_resp_admin.php" method="post" class="formulario">
					<h2 class="formulario__titulo">ACCESO AL ADMINISTRADOR</h2><br><br>
					<?php 
						if( isset( $_GET["error"])){          
							echo "<p style='color:red;text-align:center;'>
							USUARIO INVALIDO
							</p>";
					}?>
					<input name="txtus" type="text" class="formulario__input" required>
					<label class="formulario__label">Usuario</label>
					<input name="txtpass" type="password" class="formulario__input" required>
					<label class="formulario__label">Contraseña</label>
					<input type="submit" class="formulario__submit">
					<!--<br>
					<div class="formulario__submit"> <a href="Complementos/guiausuario_181216.pdf"  target=”_blank”>Descargar Guia de Usuarios</a></div>-->
				</form>
					<script src="../js/modernizr-custom.js"></script>
					<script src="../js/form.js"></script>		
			<footer>
				<p>Av. José María Izazaga No. 99, Piso 5, Colonia Centro, Alcaldía Cuauhtémoc, C.P. 06080,</p>
				<p>Tel. (55) 36 01 84 00, Ext. 19295  www.sepdf.gob.mx </p>
			</footer>
	</body>
</html>