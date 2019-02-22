<?php
    $us = $_POST["txtus"];
    $ps = $_POST["txtpass"];

    echo "tu usuario: " . $us;
    echo "<br>";
    echo "tu pass: " . $ps;
//------
include("../conexion-login/conexion.php");
//------
$consulta = "SELECT * FROM usuario WHERE cct_ins ='$us' AND pass_ins = '$ps' /*AND adminn = '11'*/";
        echo "<br>" . $consulta;
//------
$query = $bd->prepare($consulta);
$query->execute();
$rs = $query->fetchAll();

$filas = count($rs);
echo "<br> filas: " . $filas;
if($filas==1){
   echo "BIENVENIDO ";     
    //-----sesion:
    session_start();
    $_SESSION["ses_id"] = $rs[0]["id"];
    $_SESSION["ses_identificado"] = "si";
    //----ADMIN
    $_SESSION["ses_cct_ins"] = $rs[0]["cct_ins"];
    $_SESSION["ses_ze_ins"] = $rs[0]["ze_ins"];
    $_SESSION["ses_do_ins"] = $rs[0]["do_ins"];
    $_SESSION["ses_ape_p_ins"] = $rs[0]["ape_p_ins"];
    $_SESSION["ses_ape_m_ins"] = $rs[0]["ape_m_ins"];
    $_SESSION["ses_nombre_ins"] = $rs[0]["nombre_ins"];
    $_SESSION["ses_pass_ins"] = $rs[0]["pass_ins"];
    $_SESSION["ses_zona"] = $rs[0]["zona"];
    $_SESSION["ses_inspeccion_ins"]= $rs[0]["inspeccion_ins"];
   header("Location:indi_12.php"); 
}else{
   echo "INVALIDO" ;
    header("Location: index.php?error=123");
    }
?>