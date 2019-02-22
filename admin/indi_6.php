<?php include('foot-head/header.php'); ?>
	<style type="text/css">
		.button {
			font-size: 15px;
			padding: 4px;
			width: 55px;
        }
        td{font-size: 12.5px;}
        .th1{font-size: 13px}
	</style>

	<section class="main">
	<div class="wrapp">
	<div class="mensaje">
		<div class="titulo"><h2 align="left">Direccion Operativa 2</h2></div>
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
		$consulta = "SELECT * FROM alumnos_identificados WHERE zona=94 or zona=95 or zona=96 or zona=97 or zona=98
        or zona=99 or zona=100 or zona=101 or zona=102 or zona=103 or zona=104 or zona=105 or zona=106 or zona=107 or zona=108
        or zona=109 or zona='t7'
         AND condicion_actl!='4' AND condicion_actl!='5' ORDER BY zona,cctEsc,apellidoP ASC";
		$query=$bd->prepare($consulta);
		$query->execute();
		$rs = $query->fetchAll();
?>

<div class="scroll">
	<table>
		<thead>
            <th>Z.E.</th>
			<th>Apellido Paterno</th>
			<th>Apellido Materno</th>
			<th>Nombre</th>
			<th>CURP</th>
			<th class="th1">CCT de la Escuela</th>
			<th class="th1">Nivel de Prioridad</th>
			<th class="th1">Fecha de  Registro</th>
			<th class="th1">Grado que cursa</th>
			<th><!--Modificar--></th>
			<th><!--EDITAR--></th>
			<th><!--BORRAR--></th>
		</thead>

		<?php for( $cont=0; $cont < count($rs) ; $cont++){ ?> 
			<tr>
                <td ><?php echo $rs[$cont]["zona"]?></td>
				<td ><?php echo $rs[$cont]["apellidoP"]?></td>
				<td><?php echo $rs[$cont]["apellidoM"] ?></td>
				<td><?php echo $rs[$cont]["nombre"] ?></td>
				<td><?php echo $rs[$cont]["curp"] ?></td>
				<td><?php echo $rs[$cont]["cctEsc"] ?></td>
				<!--__________________________________________________-->
				<td class="td1"><?php echo $rs[$cont]['nivel'] ?>		
				<td class="td1"><?php echo $rs[$cont]["fechaReg"] ?></td>
				<td class="td1"><?php echo $rs[$cont]["GradoReg"] ?></td>
				
				<td><button class="button" style="vertical-align:middle" onclick="modifi(<?php echo $rs[$cont]['id'] ?>)"><span> <i class="icon icon-news "></i></span></button></td>
				<td><button class="button" style="vertical-align:middle" onclick="editAlumn(<?php echo $rs[$cont]['id'] ?>)"><span> <i class="icon icon-pencil"></i></span></button></td>
				<td><button class="button" style="vertical-align:middle" onclick="borrar(<?php echo $rs[$cont]['id'] ?>)"><span> <i class="icon icon-remove-user"></i></span></button></td>
			</tr>
		<?php } ?> 
	</table>
</div><!-- scroll -->
<!-- ________________________-->
<script>  
 function editAlumn(x){        
    window.location = "edit_alumn_admin.php?idx="+x
  } 
    function borrar(x){ 
		var flag = confirm("Esta seguro de que desea borrar?")
		if (flag){       
			window.location = "borrar.php?idx="+x
			document.form_hidden.submit();
		}
	}
	function modifi(x){        
		window.location = "editar_admin.php?idx="+x
	}       
</script>
<!--__________________________-->
			</div><!-- wrapp -->
		</div><!-- main -->
	</section>
<?php include('../foot-head/footer.php'); ?>
</body>
</html>