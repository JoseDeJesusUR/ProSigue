<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="../js/functions.js"></script>

<?php include('header.php'); ?>

	<style type="text/css">
			.custom-select{
				width: 30%;
			}
			h2{
				text-align: center;
			}
	</style> 

	<section class="main">
	<div class="wrapp">
	<div class="mensaje">
		<div class="titulo"><h1 align="left">   </h1></div>
		<div class="titulo">
			<?php
				echo "<h4>";
				include("../conexion-login/sesion.php");
				echo "</h4>";
			?>
		</div>
	</div>
			<div class="articulo">
			<div id="main-container">		
<?php
	include("../conexion-login/conexion.php");
?>

<!--____________________________________________________________________________________________________________________________-->	
<!--____________________________________________________________________________________________________________________________-->
<br><br>
	<form name="general" method="post" action="indi_1.php">
		<br/><br/>
			<div>
				<h2>ZONA ESCOLAR</h2>
					<select name="continentes" class="custom-select" id="continentes">
						<option  value="0">Seleccione</option>
					</select>
			</div>
				<br><br>
			<div>
				<h2>CCT</h2>
					<p>
						<select name="paises" class="custom-select" id="paises">
							<option  value="0">Seleccione</option>
						</select>
					</p>
					<br><br>
						<center><input type="submit" name="button" id="button" value="Enviar" class="button" formtarget="_blank"></center>
			</div>
		<br/><br/><br/><br/>
	</form>
<!--____________________________________________________________________________________________________________________________-->
<!--____________________________________________________________________________________________________________________________-->
			</div><!-- wrapp -->
		</div><!-- main -->
	</section>
<?php include('../foot-head/footer.php'); ?>
</body>
</html>