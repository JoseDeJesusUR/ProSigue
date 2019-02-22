<?php 
session_start(); 

date_default_timezone_set('America/Mexico_City');
echo $fecha=date('Y/m/d');

    $id=$_POST["txtid"];
    $apeP=$_POST["txtapellidoP"];
    $apeM=$_POST["txtapellidoM"];
    $nom=$_POST["txtnombre"];
    $cur=$_POST["txtcurp"];
    $cct=$_POST["txtcctEsc"];
    $zon=$_POST["txtzona"];
    $nivl=$_POST["txtnivel"];
    $grado=$_POST["txtGradoReg"];
    $sitEst=$_POST["txtsit_del_est"];
//-----------------------------------------------------------
    include("../conexion-login/conexion.php"); 
    $consulta = "INSERT INTO alumnos_identificados(
        id,
        apellidoP,
        apellidoM, 
        nombre, 
        curp, 
        cctEsc,
        zona,
        nivel,
        GradoReg,
        fechaReg,
        sit_del_est)
            VALUES(
                '$id',
                '$apeP',
                '$apeM',
                '$nom',
                '$cur', 
                '$cct',
                '$zon',
                '$nivl', 
                '$grado',
                '$fecha',
                '$sitEst')";
                echo "consulta: " . $consulta;
    $query = $bd->prepare($consulta);
    $query->execute();
    header("Location:msj_result_admin.php"); 
?>
