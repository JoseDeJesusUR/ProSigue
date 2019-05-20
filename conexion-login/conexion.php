<?php

$host = "localhost";
$basededatos = "prosigue";
$usuario = "root";
$password = "savemo425200";
$puerto = "3306";

try{
    $bd= new PDO("mysql:host=".$host.";dbname=".$basededatos.";port=".$puerto, $usuario, $password);    
    $bd-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);    
    //echo "<br>Conexion lista";
    
}catch(PDOException $e){    
    echo "<br>Ocurrio un error ->" . 
        $e->getMessage();
    }
?>