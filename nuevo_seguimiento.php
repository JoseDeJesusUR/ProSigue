<?php 

 session_start();
 $id_result=$_SESSION['idok'];
    $idx=$_POST["txtid"];
    $accin=$_POST["txtaccion"];
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

    echo $id_result;
//---------------------------------------------------------- - 
include("conexion-login/conexion.php"); 
$consulta = "INSERT INTO registro_alumno(
        id,
        accion,
        fechaAccion, 
        estado_accion,  
        figurasDocente, 
        figurasDirectivo, 
        figurasTutor,
        figurasOrientador,
        figurasTS,
        figurasPF,
        figurasUDEI,
        figurasOtro,
        logro_d_a)
            VALUES(
                '$id_result',
                '$accin',
                '$fechA',
                '$est_a',
                '$figDoc', 
                '$figDir',
                '$figTu', 
                '$figOr',
                '$figTs',
                '$figPf',
                '$figUdei',
                '$figOt',
                '$log')";
/*==================================================================================================*/
    $cond_act=$_POST["txtcondicion_actl"];
    $obs=$_POST["txtobservaciones"];
//-----------------------------------------------------------
    $consulta2 = "UPDATE alumnos_identificados SET
        condicion_actl = '$cond_act',
        observaciones = '$obs'
            WHERE id=$id_result";
                echo "consulta2: " . $consulta2;
                $query = $bd->prepare($consulta2);
                $query->execute();
/*==================================================================================================*/             
    echo "consulta: " . $consulta;
    $query = $bd->prepare($consulta);
    $query->execute();
  header("Location:msj_result.php");
?>