<?php include('foot-head/header.php'); ?>

<style>
	.mensaje{
		
	}
</style>

<div class="wrapp">
	<div class="mensaje">
		<div class="titulo"><h2 align="left"></h2></div>
		<div class="titulo">
			<?php
				echo "<h4>";
				include("conexion-login/sesion.php");
				echo "</h4>";
			?>
		</div>
	</div>
<!--___________________________________________________________________________________________________________________________________-->
	<div class="articulo">
		<article>
                <h1 class="mensaje">El registro fue exitoso</h1>
<!--___________________________________________________________________________________________________________________________________-->
		</article>
	</div><!-- articulo -->
</div><!-- wrapp -->
<?php include('foot-head/footer.php'); ?>
</body>
</html>