<?php include('foot-head/header.php'); ?>
	<style type="text/css">
		.button {
			font-size: 15px;
			padding: 4px;
			width: 105px;
		}
	</style>

	<section class="main">
	<div class="wrapp">
	<div class="mensaje">
		<div class="titulo"><h2 align="left">Estudiantes sin rezago escolar</h2></div>
		<div class="titulo">
			<?php
			session_start();
				echo "<h4>";
				include("conexion-login/sesion.php");
				echo "</h4>";
				/*echo  $_SESSION["ses_zona"];*/
			?>
		</div>
	</div>
			<div class="articulo">
			<div id="main-container">		
<!--___ -->
<?php
	include("conexion-login/conexion.php");
		$consulta = "SELECT * FROM alumnos_identificados WHERE  zona='$zona_esc' AND (condicion_actl='4' OR condicion_actl='5') ORDER BY cctEsc, apellidoP";
		$query=$bd->prepare($consulta);
		$query->execute();
		$rs = $query->fetchAll();
?>
<!--___ -->
<div class="scroll">
	<table>
		<thead>
			<th>Apellido Paterno</th>
			<th>Apellido Materno</th>
			<th>Nombre</th>
			<th>CURP</th>
			<th>CCT de la Escuela</th>
			<!--<th>Nivel de Prioridad</th>-->
			<th>Fecha de  Registro</th>
			<th>Grado que cursa cuando se registra</th>
			<th><!--IMPRIMIR--></th>
			<th><!--Modificar--></th>
		</thead>

		<?php for( $cont=0; $cont < count($rs) ; $cont++){ ?> 
			<tr>
				<td ><?php echo $rs[$cont]["apellidoP"]?></td>
				<td><?php echo $rs[$cont]["apellidoM"] ?></td>
				<td><?php echo $rs[$cont]["nombre"] ?></td>
				<td><?php echo $rs[$cont]["curp"] ?></td>
				<td><?php echo $rs[$cont]["cctEsc"] ?></td>
				<!--<td class="td1">< ?php echo $rs[$cont]['nivel'] ?>-->

				<td class="td1"><?php echo $rs[$cont]["fechaReg"] ?></td>
				<td class="td1"><?php echo $rs[$cont]["GradoReg"] ?></td>
				
				<td><button class="button" style="vertical-align:middle" onclick="impri(<?php echo $rs[$cont]['id']?>)"><span>PDF</span></button></td> 
				<td><button class="button" style="vertical-align:middle" onclick="modificar(<?php echo $rs[$cont]['id'] ?>)"><span>Consultar</span></button></td>
			</tr>
		<?php } ?> 
	</table>
	</div><!-- scroll -->
<!-- ________________________-->
<script>  
    /*function borrar(x){        
    alert("Borrar->" + x)
    window.location = "borrar.php?idx="+x
  }*/
  function modificar(x){        
    window.location = "editar2.php?idx="+x
  }   
  function impri(x){        
    window.location = "fpdf/pdf2.php?idx="+x
  }    
</script>
<!--__________________________-->
			</div><!-- wrapp -->
		</div><!-- main -->
	</section>
<?php include('foot-head/footer.php'); ?>
</body>
</html>