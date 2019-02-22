<?php include('foot-head/header.php'); ?>
<style>
	footer {
		position: relative;
    }
	.warning {
		padding:15px 15px;
		background-color: #F9E79F;
		border-left: 6px solid #F4D03F;
	}
	#mas{
		padding-left: 10%;
	}
	/*.btn_img{
		padding: 10px;
		border-radius: 50px;
	}*/
	#more {display: none;}
</style>

<div class="wrapp">
	<div class="mensaje">
		<div class="titulo"><h2 align="left">Estrategia de prevención y atención al rezago escolar en <br>
		estudiantes de secundaria.</h2></div>
		<div class="titulo">
			<?php
				echo "<h4>";
				include("conexion-login/sesion.php");
				echo "</h4>";
			?>
		</div><!--titulo-->
	</div><!--mensaje-->
<!--___________________________________________________________________________________________________________________________________-->
	<div class="articulo">
		<article>
		<br>
		<center><img src="Complementos/PROSIGUE.png" alt="ProSigue" height="300" width="380"></center>
			<br><h4>Estimado(a) Supervisor(a)</h4><br>
				<p>La Coordinación Sectorial de Educación Secundaria a través de la Subdirección de Apoyo Técnico Complementario, implementa 
				la estrategia “PROsigue”, como una herramienta de apoyo a la Supervisión Escolar en la identificación y seguimiento de 
				estudiantes que se encuentran actualmente en situaciones de rezago escolar en los planteles de su tramo de control y que, 
				mediante el apoyo e intervención de directores, subdirectores, docentes y personal de apoyo a la educación, contemos con 
				estrategias y acciones que permitan fortalecer los aprendizajes de los estudiantes y logren concluir su educación secundaria.</p>
					<br>
				<p>La herramienta PROsigue cuenta con esta plataforma que le permite ir conformando el portafolio de evidencias de los 
				estudiantes detectados como población vulnerable, con BAP y con rezago académico.</p>
					<br>
				<p>Esta herramienta focaliza a la población escolar, agrupándola en los siguientes niveles de prioridad:</p>
					<br>

				<div class="warning">
				<b>• Prioridad 1.</b> El estudiante ya no asiste en la escuela por lo que es necesario brindar otras alternativas
				 de estudio. <br>
				<b>• Prioridad 2.</b> Los estudiantes identificados en este nivel son aquellos que, en grados escolares anteriores presentan asignaturas 
				no acreditadas anualmente de los planes y programas cursados y que pone en riesgo la obtención del Documento Electrónico de 
				Certificación (DEC) de secundaria. <br>
				<b>• Prioridad 3.</b> El estudiante asiste a la escuela, pero su rendimiento académico es bajo y tiene altas probabilidades de no acreditar
				 el grado escolar en curso. Los estudiantes que se identifican en este nivel de prioridad son aquellos que no cumplen con alguno 
				 de los criterios de acreditación identificados a partir del primer periodo de evaluación concluido: 
					<button onclick="myFunction()" id="myBtn"> + </button>
					<span id="dots"></span><span id="more"><br>
					<div id="mas">
						•	Calificaciones no aprobatorias en Lengua Materna y Matemáticas. <br>
						•	Promedio general de 6 en el resto de las asignaturas de los campos de Formación Académica (en el caso de primero de 
							secundaria, contar con 4 asignaturas aprobadas de los campos de Formación Académica).<br>
						•	Un Nivel de Desempeño mínimo de II en al menos dos de las áreas de Desarrollo Personal y Social, y <br>
						•	Un Nivel de Desempeño mínimo de II en al menos dos clubes de Autonomía Curricular. </span>
					</div>
				</div>
				
				<!--<center><img src="Complementos/1.png" alt="ProSigue" height="350" width="500"></center>-->
				<!--_______________________________________________________________________________________-->
				<!--<button id="myBtn" class="btn_img">ELEMENTOS INVOLUCRADOS</button>
            		<div id="myModal" class="modal">
                		<div class="modal-content">
                    		<span class="close">&times;</span>
                    		<img src="Complementos/tabla.png">
                		</div>
            		</div>-->
				<!--_______________________________________________________________________________________-->
				<br>
				<p>Esta plataforma que se pone a disposición del Supervisor Escolar es susceptible de ser mejorada como herramienta de apoyo a 
				función, por lo que agradeceremos hacer llegar sus opiniones o comentarios a la Subdirección de Apoyo Técnico Complementario 
				vía los correos electrónicos: <b>isabel.cruzf@sepdf.gob.mx</b> y <b>elsa.lopezp@sepdf.gob.mx</b></p>
					<br>
				<p>Reconocemos la importancia de las acciones que realiza día a día en la labor con sus escuelas por lo que esperamos que 
				la plataforma sea de apoyo a la función que desempeña.</p> <br>
<!--___________________________________________________________________________________________________________________________________-->
		</article>
	</div><!-- articulo -->
</div><!-- wrapp -->
<?php include('foot-head/footer.php'); ?>
<!--<script src="js/imgBtn.js"></script>-->
<script src="js/leermas.js"></script>
</body>
</html>