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
		<div class="titulo"><h2 align="left">Busquedas</h2></div>
		<div class="titulo">
			<?php
				echo "<h4>";
				include("conexion-login/sesion.php");
				echo "</h4>";
			?>
		</div>
	</div>
	<div class="articulo">
	<div id="main-container">		
<!--__________________________________________________________________________________________-->
        <h1>Buscar por CURP </h1> 
        <form id="buscador" name="buscador" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>"> 
            <input id="buscar" name="buscar" type="search" placeholder="Buscar CURP" autofocus required>
            <input type="submit" name="buscador" class="button" value="BUSCAR">
        </form>
<!--__________________________________________________________________________________________-->
<?php
    define('HOST_DB', 'localhost');  
    define('USER_DB', 'root');       
    define('PASS_DB', 'rootroot');          
    define('NAME_DB', 'prosigue'); 
    function conectar(){
        global $conexion;  
        $conexion = mysql_connect(HOST_DB, USER_DB, PASS_DB)
        or die ('NO SE HA PODIDO CONECTAR AL MOTOR DE LA BASE DE DATOS');
        mysql_select_db(NAME_DB)
        or die ('NO SE ENCUENTRA LA BASE DE DATOS ' . NAME_DB);
    }
    function desconectar(){
        global $conexion;
        mysql_close($conexion);
    }
/*-------------------------------*/
$texto = '';
$registros = '';

if($_POST){
   $busqueda = trim($_POST['buscar']);
   $entero = 0;
  
    if (empty($busqueda)){
        $texto = 'Búsqueda sin resultados';
    }else{
        conectar();
        mysql_set_charset('utf8'); 
        $sql = "SELECT * FROM alumnos_identificados WHERE curp LIKE '%" .$busqueda. "%' ORDER BY apellidoP";
        $resultado = mysql_query($sql);
        if (mysql_num_rows($resultado) > 0){ 
		    $registros = '<p>Se han encontrado ' . mysql_num_rows($resultado) . ' registros </p>';         
?>
<br>
    <div class="scroll">        
        <table>
            <thead>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Nombre</th>
                <th>CURP</th>
                <th>CCT de la Escuela</th>
                <th>Nivel de Prioridad</th>
                <th>Fecha de  Registro</th>
                <th>Grado que cursa cuando se registra</th>
                <th><!--Editarar--></th>
                <th><!--Modificar--></th>
            </thead>

            <?php while($fila = mysql_fetch_assoc($resultado)){ ?>
            <tr>
                <td ><?php echo $texto = $fila['apellidoP']?></td>
                <td ><?php echo $texto = $fila['apellidoM']?></td>
                <td><?php echo $texto = $fila["nombre"] ?></td>
				<td><?php echo $texto = $fila["curp"] ?></td>
				<td><?php echo $texto = $fila["cctEsc"] ?></td>
				<td class="td1"><?php echo $texto = $fila['nivel'] ?>		
				<td class="td1"><?php echo $texto = $fila["fechaReg"] ?></td>
				<td class="td1"><?php echo $texto = $fila["GradoReg"] ?></td>
                <td><button class="button" style="vertical-align:middle" onclick="edit_alumn(<?php echo $texto = $fila['id'] ?>)"><span>Editar</span></button></td>
				<td><button class="button" style="vertical-align:middle" onclick="modifica(<?php echo $texto = $fila['id'] ?>)"><span>Seguimiento</span></button></td>
            </tr>
            <?php } 
	}else{
		$texto = "NO HAY RESULTADOS EN LA BBDD";	
	}
    //mysql_close($conexion);
  }
}
?>
<!--_________-->
<?php 
    echo $registros;
    //echo $texto;
?>
<!--__________________________________________________________________________________________-->
<script>  
  function edit_alumn(x){        
    window.open("edit_alumn.php?idx="+x)
  } 
  function modifica(x){        
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