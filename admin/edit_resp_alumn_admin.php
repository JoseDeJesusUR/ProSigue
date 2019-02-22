<?php 
    $ape_pat=$_POST["txtape_pat"];
    $ape_mat=$_POST["txtape_mat"];
    $nom_est=$_POST["txtnom_est"];
    $curp=$_POST["txtcurp"];
    $cctesc=$_POST["txtcctesc"];
    $niv_pro=$_POST["txtniv_pro"];
    $grado=$_POST["txtgrado"];
    $sit_est=$_POST["txtsit_est"];

    $id=$_POST["txtid"];
//-----------------------------------------------------------
    include("../conexion-login/conexion.php"); 
    $consulta = "UPDATE alumnos_identificados SET
    
    apellidoP='$ape_pat',
    apellidoM='$ape_mat',
    nombre='$nom_est',
    curp='$curp',
    cctEsc='$cctesc',
    nivel='$niv_pro',
    GradoReg='$grado',
    sit_del_est='$sit_est'
    
  WHERE id=$id";
        echo "consulta: " . $consulta;
        $query = $bd->prepare($consulta);
        $query->execute();
    header("Location:msj_result_admin.php"); 
?>