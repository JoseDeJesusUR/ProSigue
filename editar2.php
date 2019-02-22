<?php include('foot-head/header.php'); ?> 
<style type="text/css">
	footer {
		position: relative;
    }
    .sit_alum{
        background-color: #fff;
        border: 1px solid silver;
        height: 100px;
        width: 100%;
        padding: 15px; 
        overflow: auto;
        border-radius: 5px 35px;
      }  
    input{
        width: 250px;
      }
    textarea{
        max-width: 360px;
        margin-bottom: -1px;
    }
    .button{
        margin: 20px 50% ; 
    }
    table{
        border-color: #D5D8DC;
    }
</style>

<div class="wrapp">
	<div class="mensaje">
		<div class="titulo"><h2 align="left">Datos del alumno identificado que concluyo la educación básica</h2></div>
		<div class="titulo">
			<?php
				echo "<h4>";
				include("conexion-login/sesion.php");
				echo "</h4>";
			?>
		</div>
	</div>
	<div class="articulo">
	    <article>
<!--___________________________________________________________________________________________________________________________________-->
    <?php 
        $idx=$_GET["idx"];
        include("conexion-login/conexion.php");
        $consulta = "SELECT * FROM alumnos_identificados WHERE id=".$idx;
        $query = $bd->prepare($consulta);
        $query->execute();
        $rs = $query->fetchAll();
    ?>
<!-- ________________________ -->
  <input name="txtid" value="<?php echo $rs[0]["id"]; ?>" type="hidden"> 
    <table>
        <thead>
            <tr>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Nombre</th>
                <th>CCT de la Escuela</th>
                <!--<th>Nivel de prioridad</th>-->
                <th>Fecha de registro</th>
                <th>Grado que cursa cuando se registra</th>
            </tr>
        </thead>
      <tr>
        <td class="td1"><?php echo $rs[0]["apellidoP"];?></td>   
        <td class="td1"><?php echo $rs[0]["apellidoM"];?></td>
        <td class="td1"><?php echo $rs[0]["nombre"];?></td>
        <td class="td1"><?php echo $rs[0]["cctEsc"];?></td>
        <!--<td class="td1">< ?php echo $rs[0]["nivel"];?></td>-->
        <td class="td1"><?php echo $rs[0]["fechaReg"];?></td> 
        <td class="td1"><?php echo $rs[0]["GradoReg"];?></td>   
      <tr>
    </table>
<br>
<h3>Situación inicial del estudiante</h3>
    <div class="sit_alum">
        <?php echo $rs[0]["sit_del_est"];?>
    </div> 
<br>
<h3>Situación actual del estudiante</h3>
    <div class="sit_alum">
        <!-- < ?php echo $rs[0]["condicion_actl"];?> <br>-->
        <?php 
            $sit_est = $rs[0]["condicion_actl"];
            if ($sit_est == 4){
                echo "SIN REZAGO ESCOLAR.";
            }else{
                echo "CONCLUYÓ SATISFACTORIAMENTE LA EDUCACIÓN BÁSICA.";
            }
        ?>
        <br><br>
        <?php echo $rs[0]["observaciones"];?>
    </div>
<br>
<!-- _____________________________________________________________________________________________ -->
<?php 
$idx;
$_SESSION['idok']= $idx;
$id_result=$_SESSION['idok'];
#echo $id_result;
    include("conexion-login/conexion.php");
    $consulta = "SELECT * FROM registro_alumno WHERE id=$id_result ORDER BY fechaAccion";
    $query = $bd->prepare($consulta);
    $query->execute();
    $rs = $query->fetchAll();
{?>   
    <table border='1px'>
        <thead>
            <tr>
                <th>Acciones de acompañamiento</th>
                <th>Fecha de registro</th>
                <th>Estado de la acción</th>
                <th>Figuras involucradas</th>
                <th>Logro, dificultad o avance</th>
            </tr>
        </thead>
            <?php for( $cont=0; $cont < count($rs) ; $cont++){ ?>
                <tr id='tab'>
                    <td class="td1"><?php echo $rs[$cont]["accion"]?></td>
                    <td class="td1"><?php echo $rs[$cont]["fechaAccion"]?></td>
                    <td class="td1"><?php echo $rs[$cont]["estado_accion"]?></td>
                    <td class="td1"><?php echo $rs[$cont]["figurasDocente"]?>
                                    <?php echo $rs[$cont]["figurasDirectivo"]?>
                                    <?php echo $rs[$cont]["figurasTutor"]?>
                                    <?php echo $rs[$cont]["figurasOrientador"]?>
                                    <?php echo $rs[$cont]["figurasTS"]?>
                                    <?php echo $rs[$cont]["figurasPF"]?>
                                    <?php echo $rs[$cont]["figurasUDEI"]?>
                                    <?php echo $rs[$cont]["figurasOtro"]?></td>
                    <td class="td1"><?php echo $rs[$cont]["logro_d_a"]?></td>
                <tr>
            <?php } ?>
    </table>
<?php } ?>
<br><br>
<!-- _____________________________________________________________________________________________ -->
        </article>
	</div><!-- articulo -->
</div><!-- wrapp -->
<?php include('foot-head/footer.php'); ?>
</body>
</html>