<?php
    session_start();

if( isset(  $_SESSION["ses_identificado"] ) ){
    echo 
        /*"Inspector (a): " . */$_SESSION["ses_nombre_ins"] . " " . $_SESSION["ses_ape_p_ins"] . " " . $_SESSION["ses_ape_m_ins"] . "<br>" . 
        $_SESSION["ses_inspeccion_ins"] . "<br>" . 
        "DO" . $_SESSION["ses_do_ins"] . "  /  " . "ZE" . $zona_esc = $_SESSION["ses_ze_ins"];
}else{   
    header("Location:index.php?sesion=456");
    exit();
    }
?>