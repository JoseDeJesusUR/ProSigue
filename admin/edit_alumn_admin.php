<?php include('foot-head/header.php'); ?>
<style>
  input{
    width: 100%;
  }
  textarea{
    margin:5px 0;
    box-sizing: border-box;
    border-radius: 7px;
    min-height: 50px;
    max-height: 100px;
    max-width: 700px;
    padding: 10px;
	}
</style>
<div class="wrapp">
	<div class="mensaje">
		<div class="titulo"><h2 align="left">Edición de Datos del Alumno</h2></div>
		<div class="titulo">
			<?php
				echo "<h4>";
				include("../conexion-login/sesion.php");
				echo "</h4>";
			?>
		</div>
	</div>
	<div class="articulo">
		<article>
<!--____________________________________________________________________-->
    <?php 
        $idx=$_GET["idx"];
        include("../conexion-login/conexion.php");
        $consulta = "SELECT * FROM alumnos_identificados WHERE id=".$idx ;
        $query = $bd->prepare($consulta);
        $query->execute();
        $rs = $query->fetchAll();
    ?>
<!-- ___________________________________________________________________-->
<form action="edit_resp_alumn_admin.php" method="post">    
  <input name="txtid" value="<?php echo $rs[0]["id"]; ?>" type="hidden"> 
  <div>
    <table>
        <thead>
          <tr>
              <th>Apellido Paterno</th>
              <th>Apellido Materno</th>
              <th >Nombre</th>
              <th>CURP</th>  
              <th>CCT de la Escuela</th>
          </tr>
        </thead>

      <tr>
        <td><input name="txtape_pat" placeholder="Apellido Paterno" required onKeyUp="this.value = this.value.toUpperCase();"value="<?php echo $rs[0]["apellidoP"];?>"></td>
        <td><input name="txtape_mat" placeholder="Apellido Materno" required onKeyUp="this.value = this.value.toUpperCase();"value="<?php echo $rs[0]["apellidoM"];?>"></td>
        <td><input name="txtnom_est" placeholder="Nombre" required onKeyUp="this.value = this.value.toUpperCase();"value="<?php echo $rs[0]["nombre"];?>"></td>
        <td><input name="txtcurp" placeholder="CURP" onKeyUp="this.value = this.value.toUpperCase();"value="<?php echo $rs[0]["curp"];?>"></td>
        <td><input name="txtcctesc" placeholder="CCT de la Escuela" onKeyUp="this.value = this.value.toUpperCase();"value="<?php echo $rs[0]["cctEsc"];?>"></td>
      </tr>
      <tr height="30 %"></tr>
        <thead>
          <tr>      
            <th>Nivel de prioridad</th>
            <th>Grado que cursa cuando se registra</th>
            <th colspan="3">Situación del Estudiante</th>
          </tr>
        </thead>
      <tr>
      
      <td><input name="txtniv_pro" placeholder="Nivel de prioridad" onKeyUp="this.value = this.value.toUpperCase();"value="<?php echo $rs[0]["nivel"];?>"></td>
      <td><input name="txtgrado" placeholder="Grado que cursa cuando se registra" onKeyUp="this.value = this.value.toUpperCase();"value="<?php echo $rs[0]["GradoReg"];?>"></td>
      <td colspan="3"><textarea name="txtsit_est" placeholder="Situación del Estudiante" onKeyUp="this.value = this.value.toUpperCase();"><?php echo $rs[0]["sit_del_est"];?></textarea></td>
      </tr>
      <tr height="30 %"></tr>
    </table>  
      <br><br>
      <center><button class="button" style="vertical-align:middle"><span>Guardar</span></button></center>
</form>
<!--___________________________________________________________________________________________________________________________________-->
		</article>
	</div><!-- articulo -->
</div><!-- wrapp -->
<?php include('foot-head/footer.php'); ?>
</body>
</html>