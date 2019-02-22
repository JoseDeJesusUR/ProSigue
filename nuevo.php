<?php include('foot-head/header.php'); ?>
<style>
    textarea{
        margin-bottom: 1%;
    }
    footer {
	    position: relative;
    }
    input{
        width: 100%;
        height: 25px;
    }
    td{padding: 15px;}
    option{
        background-color: coral;
    }
</style>
<div class="wrapp">
	<div class="mensaje">
		<div class="titulo"><h2 align="left">Incorporación de Estudiantes</h2></div>
		<div class="titulo">
			<?php
				echo "<h4>";
				include("conexion-login/sesion.php");
                echo "</h4>";
                #echo "$zona_esc";
			?>
		</div>
	</div>
	<div class="articulo">
		<article>
<!--___________________________________________________________________________________________________________________________________-->				
<div>
    <?php 
        include("conexion-login/conexion.php");
    ?>

<br>
    <form action="nuevo_respuesta.php" method="post">  
        <table>
            <thead>
                <tr>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th colspan="2">Nombre</th>
                    <th>CURP</th>
                </tr>
            </thead>

            <tr>
                <td> <input name="txtapellidoP" placeholder="Apellido Paterno" required onKeyUp="this.value = this.value.toUpperCase();"></td> 
                <td> <input name="txtapellidoM" placeholder="Apellido Materno" required onKeyUp="this.value = this.value.toUpperCase();"></td>  
                <td colspan="2"> <input name="txtnombre" placeholder="Nombre" required onKeyUp="this.value = this.value.toUpperCase();"></td>     
                <td> <input name="txtcurp" placeholder="curp" maxlength="18" required onKeyUp="this.value = this.value.toUpperCase();"></td>
            </tr>
                <!--___--><tr height="15"></tr><!--___-->
            <thead>
                <tr>
                    <th>CCT de la Escuela</th>
                    <th>ZONA</th>
                    <th>Nivel de Prioridad</th>
                    <th>Grado que cursa cuando se registra</th>
                    <th>Fecha de Registro</th>
                </tr>
            </thead>
<!--___________________________________________________________________________________________________________________________________-->               
                <!--<td>
                < ?
                    $query = "SELECT cct FROM escuelas WHERE cct= '09DES0001G'";     
                    $result = mysql_query ($query) or die (mysql_error());
                    while ($row = @mysql_fetch_array($result)){
                        $cctok = $row ['cct'];
                    }
                ?>
                   < ?
                        echo"<select required name=cct_ok >";
                        echo"<option selected disabled value='' class='cct'> --Seleccione-- </option>";
                        $query = mysql_query("SELECT cct FROM escuelas WHERE ze='1' ORDER BY cct"); 
                        while($row = mysql_fetch_array($query)){
                            echo"<option value=$row[cct]>$row[cct]</option>";
                            }echo"</select>";
                    ?>
                </td> -->
<!--___________________________________________________________________________________________________________________________________-->
                <td> <input name="txtcctEsc" placeholder="Escuela" required onKeyUp="this.value = this.value.toUpperCase();"></td>
                <td><input name="txtzona" style="text-align: center" value="<?php echo "$zona_esc"?>" readonly></td>
                <td> <!--NIVEL DE PRIODIDAD-->
                    <label class="container"> 1
                        <input type="radio" checked="checked" name="txtnivel" value='1'>
                        <span class="checkmark"></span>
                    </label>
                    <label class="container"> 2
                        <input type="radio" name="txtnivel" value='2'>
                        <span class="checkmark"></span>
                    </label>
                        <label class="container"> 3
                        <input type="radio" name="txtnivel" value='3'>
                        <span class="checkmark"></span>
                    </label>
                </td>

                <td> <!--GRADO DE REGISTRO-->
                    <label class="container"> 1° Año
                        <input type="radio" checked="checked" name="txtGradoReg" value='1'>
                        <span class="checkmark"></span>
                    </label>
                    <label class="container"> 2° Año
                        <input type="radio" name="txtGradoReg" value='2'>
                        <span class="checkmark"></span>
                    </label>
                    <label class="container"> 3° Año
                        <input type="radio" name="txtGradoReg" value='3'>
                        <span class="checkmark"></span>
                    </label>
                </td>

                <td class="td1"><?php date_default_timezone_set('America/Mexico_City');
				echo $fecha=date('d / m / Y');?></td>    
        </table>
        <br>
            <h3>Situación del Estudiante</h3>
            <textarea name="txtsit_del_est" placeholder="(Describa brevemente la situación en la que se encuentra el estudiante)." 
            required onKeyUp="this.value = this.value.toUpperCase();"></textarea>

    <center><button class="button" style="vertical-align:middle"><span>Agregar</span></button></center><br>
    <br>
</form>
</div>
<!--___________________________________________________________________________________________________________________________________-->
		</article>
	</div><!-- articulo -->
</div><!-- wrapp -->
<?php include('foot-head/footer.php'); ?>
</body>

</html>