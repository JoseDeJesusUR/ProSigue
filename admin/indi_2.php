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
		$consulta = "SELECT * FROM alumnos_identificados WHERE zona=24 or zona=25 or zona=26 or zona=26 or zona=27
        or zona=28 or zona=29 or zona=30 or zona=31 or zona=32 or zona=33 or zona=34 or zona=35 or zona=36 or zona=37
        or zona=38 or zona=38 or zona=40 or zona=41 or zona=42 or zona=43 or zona=44 or zona=45 or zona=46 or zona=47
        or zona=48 or zona=49 or zona=50 or zona=51 or zona='t2' or zona='t3'
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