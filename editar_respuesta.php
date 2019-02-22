<?php 
    $accin=$_POST["txtacciones"];
    $fechA=$_POST["txtfechaAccion"];
    $est_a=$_POST["txtest_accion"];
    $figDoc=$_POST["txtfigDoc"];
    $figDir=$_POST["txtfigDirec"];
    $figTu=$_POST["txtfigTuto"];
    $figOr=$_POST["txtfigOri"];
    $figTs=$_POST["txtfigTS"];
    $figPf=$_POST["txtfigPF"];
    $figUdei=$_POST["txtfigUDEI"];
    $figOt=$_POST["txtfigOtro"];
    $log=$_POST["txtlogro"];

    $id=$_POST["txtid"];
//-----------------------------------------------------------
    include("conexion-login/conexion.php"); 
    $consulta = "UPDATE registro_alumno SET
    
    acciones='$accin',
    fechaAccion='$fechA',
    estado_accion='$est_a',
    figurasDocente='$figDoc',
    figurasDirectivo='$figDir',
    figurasTutor='$figTu',
    figurasOrientador='$figOr',
    figurasTS='$figTs',
    figurasPF='$figPf',
    figurasUDEI='$figUdei',
    figurasOtro='$figOt',   
    logro_d_a='$log'

  WHERE id=$id";
      echo "consulta: " . $consulta;
        $query = $bd->prepare($consulta);
        $query->execute();
    header("Location:msj_result.php"); 
?>