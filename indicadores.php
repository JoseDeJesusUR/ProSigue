<?php include('foot-head/header.php'); ?>
	<style type="text/css">
		/*footer {
		position: sticky;
    	}*/
		.button {
			font-size: 15px;
			padding: 4px;
			width: 105px;
		}
		.num{
			color: #c40b0b ;
			text-align: center;
		}
	</style>
	<section class="main">
	<div class="wrapp">
	<div class="mensaje">
		<div class="titulo"><h2 align="left">Seguimiento a Estudiantes</h2></div>
		<div class="titulo">
			<?php
				echo "<h4>";
				include("conexion-login/sesion.php");
				echo "</h4>";
			?>
		</div> <!--Titulo Encabezado-->
	</div> <!--Titulo Conexion-->
	<div class="articulo">
	<div id="main-container">
<!--___ -->		
		<?php
			include("conexion-login/conexion.php");
				$consulta = "SELECT * FROM alumnos_identificados WHERE zona='$zona_esc' AND condicion_actl!='4' AND condicion_actl!='5' ORDER BY cctEsc, apellidoP";
				$query=$bd->prepare($consulta);
				$query->execute();
				$rs = $query->fetchAll(); 
		?>
<!--___ -->
<div class="scroll">
	<table>
		<thead>
			<th>No.</th>
			<th>Apellido Paterno</th>
			<th>Apellido Materno</th>
			<th>Nombre</th>
			<th>CURP</th>
			<th>CCT de la Escuela</th>
			<th>Nivel de Prioridad</th>
			<th>Fecha de  Registro</th>
			<th>Grado que cursa cuando se registra</th>
			<th><!--Modificar--></th>
		</thead>

		<?php for( $cont=0; $cont < count($rs) ; $cont++){ ?> 
			<tr>
				<td class="num"><?php echo 1+"$cont"?></td>
				<td><?php echo $rs[$cont]["apellidoP"]?></td>
				<td><?php echo $rs[$cont]["apellidoM"] ?></td>
				<td><?php echo $rs[$cont]["nombre"] ?></td>
				<td><?php echo $rs[$cont]["curp"] ?></td>
				<td><?php echo $rs[$cont]["cctEsc"] ?></td>
				<td class="td1"><?php echo $rs[$cont]['nivel'] ?>		
				<td class="td1"><?php echo $rs[$cont]["fechaReg"] ?></td>
				<td class="td1"><?php echo $rs[$cont]["GradoReg"] ?></td>
				
				<td><button class="button" style="vertical-align:middle" onclick="modificar(<?php echo $rs[$cont]['id'] ?>)"><span>Seguimiento</span></button></td>
			</tr>
		<?php } ?> 
	</table>
</div><!-- scroll -->
<!-- ________________________-->
<script>  
  function modificar(x){        
    window.open("editar.php?idx="+x)
  }       
</script> 
<!--__________________________-->
			</div><!-- wrapp -->
		</div><!-- main -->
	</section>
<?php include('foot-head/footer.php'); ?>
</body>
</html>