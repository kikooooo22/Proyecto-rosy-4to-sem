<?php
        
require("conexion.php");

$No_lista = $_GET["No_lista"];
$No_lista = intval($No_lista);
$Nombre = $_GET["Nombre"];
$Apellido_pat = $_GET["Apellido_pat"];
$Apellido_mat = $_GET["Apellido_mat"];

if($Nombre != "" and $Apellido_pat != "" and $Apellido_mat != ""){
    
    $consulta = "INSERT INTO alumno (No_lista,Nombre,Apellido_pat,Apellido_mat) VALUES ('$No_lista','$Nombre','$Apellido_pat','$Apellido_mat')";

    $res = $mysqli->query($consulta);
    
}

header("Location: alumnos.php");

?>