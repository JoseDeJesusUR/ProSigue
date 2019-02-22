<!DOCTYPE html> 
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=divice-width, initial-scale=1, maximum-scale=1">
			<title>ProSigue</title>
				<link rel="stylesheet" type="text/css" href="css/menu/menu.css"><!--sticky menu / header-->
				<link rel="stylesheet" type="text/css" href="css/menu/style_icon_menu.css"><!--sticky menu / header-->	
				<link rel="stylesheet" href="css/index.css"><!--Login / formulario-->
				<link rel="stylesheet" href="css/estilos.css"><!--plantilla general-->
				<link rel="stylesheet" href="css/tabla.css"><!--estilos de tablas-->
				<link rel="shortcut icon" href="Complementos/Icon.png" type="image/x-icon">	<!--Favicon-->
	</head>
	<style>
		.head-text{
			font-size: .8rem;
		}
	</style>
<body>
<!-- usuario / logo -->
<div class="header">
	<div>
		<a class="logo"><img src="Complementos/SEP.png" alt="SEP"></a>
		</div>
			<div class="text"><p class="head-text">Autoridad Educativa Federal en la Ciudad de México<br>
								 Dirección General de Operación de Servicios Educativos<br>
								 Coordinación Sectorial de Educación Secundaria<br>
								 Subdirección de Apoyo Técnico Complementario</p>
			</div>
		</div>
</div>
<!-- -->
	<header >
		<div class="wrapp">
			<nav class="menu">
				<ul>
					<li><a href="buscar.php"><span><i class="icon icon-eye"></i></span>Buscar</a>
					<li><a href="#"><span><i class="icon icon-list"></i></span>Seguimiento a Estudiantes</a>
						<ul>
							<li><a href="indi_1.php">Dirección Operativa 1</a></li>
							<li><a href="indi_2.php">Dirección Operativa 2</a>
							<li><a href="indi_3.php">Dirección Operativa 3</a>
							<li><a href="indi_4.php">Dirección Operativa 4</a>
							<li><a href="indi_6.php">Dirección Operativa 6</a>
						</ul>
					</li>
					<li><a href="nuevo_admin.php"><span><i class="icon icon-news"></i></span>Incorporación de Estudiantes</a></li>
					<li><a href="logout.php"><span><i class="icon  icon-login"></i></span>Salir</a></li>
				</ul>
			</nav><!-- menu -->
		</div> <!-- wrapp -->
	</header> 
	<!-- Js -->
	<script src="http://code.jquery.com/jquery-latest.js"></script> <!-- url de jquery (menu) -->
	<script src="js/main.js"></script><!--MENU-->
	<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>--><!--Graficas / Chart.js-->
	<script src="js/modernizr-custom.js"></script>
	<!--<script src="js/imgBtn.js"></script>-->
	<!-- /Js -->
</body>