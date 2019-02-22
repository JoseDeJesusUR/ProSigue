<?php 
    
    $idx = $_GET["idx"];
    include("../conexion-login/conexion.php");

$consulta = "DELETE FROM alumnos_identificados WHERE id=$idx";
echo $consulta;
$query = $bd->prepare($consulta);
$query->execute();

//-------
header("Location: msj_result_admin.php");

?>