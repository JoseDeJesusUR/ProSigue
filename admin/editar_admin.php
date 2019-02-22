<?php include('foot-head/header.php'); ?> 
    <style type="text/css">
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
        footer{
            position: relative;
        }
        textarea{
            max-width: 360px;
            margin-bottom: -1px;
        }
        table{
            border-color: #D5D8DC;
        }
    </style>
<div class="wrapp">
	<div class="mensaje">
		<div class="titulo"><h2 align="left">Datos del estudiante identificado en seguimiento</h2></div>
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
<!--___________________________________________________________________________________________________________________________________-->
    <?php 
        $idx=$_GET["idx"];
        include("../conexion-login/conexion.php");
        $consulta = "SELECT * FROM alumnos_identificados WHERE id=".$idx ;
        $query = $bd->prepare($consulta);
        $query->execute();
        $rs = $query->fetchAll();
    ?>
<!-- ________________________ -->
    <table>
        <thead>
            <tr>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Nombre</th>
                <th>CCT de la Escuela</th>
                <th>Nivel de prioridad</th>
                <th>Fecha de registro</th>
                <th>Grado que cursa cuando se registra</th>
                <th><!--EDITAR--></th>
            </tr>
        </thead>
      <tr>
        <td class="td1"><?php echo $rs[0]["apellidoP"];?></td>   
        <td class="td1"><?php echo $rs[0]["apellidoM"];?></td>
        <td class="td1"><?php echo $rs[0]["nombre"];?></td>
        <td class="td1"><?php echo $rs[0]["cctEsc"];?></td>
        <td class="td1"><?php echo $rs[0]["nivel"];?></td>
        <td class="td1"><?php echo $rs[0]["fechaReg"];?></td> 
        <td class="td1"><?php echo $rs[0]["GradoReg"];?></td>  
        <!--<td><button class="button" style="vertical-align:middle" onclick="edit_alumn(<?php echo $rs['id'] ?>)"><span> <i class="icon icon-pencil"></i> Editar</span></button></td> -->
      <tr>
    </table>
<br>
<h3>Situación inicial del estudiante</h3>
    <div class="sit_alum">
        <?php echo $rs[0]["sit_del_est"];?>
    </div> 
<br>
<!-- _____________________________________________________________________________________________ -->
<?php 
$idx;
$_SESSION['idok']= $idx;
$id_result=$_SESSION['idok'];
#echo $id_result;
    include("../conexion-login/conexion.php");
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
                <!--<th>Condición actual del estudiante</th>
                <th>Observaciones</th>-->
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
                    <!--<td class="td1">< ?php echo $rs[$cont]["condicion_actl"]?></td>
                    <td class="td1">< ?php echo $rs[$cont]["observaciones"]?></td>-->
                <tr>
            <?php } ?>
    </table>
<?php } ?>
<br><br>
        </article>
	</div><!-- articulo -->
</div><!-- wrapp -->
<?php include('foot-head/footer.php'); ?>
</body>
</html>