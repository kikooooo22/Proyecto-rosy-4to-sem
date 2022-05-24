<?php
    include 'header.php';
    $id=$_GET["ID"];
    $conexion=mysqli_connect("localhost","root","","school");
    $q2="DELETE FROM evidencia WHERE Trabajo_idTrabajo=$id";
    $res2=mysqli_query($conexion, $q2);
    $query="DELETE FROM trabajo WHERE idTrabajo=$id";
    $res=mysqli_query($conexion,$query);
    echo("
    <div align='center'>
        <h1 class='h1 display-2'>Trabajo borrado</h1>
        <a href='mostrar_trabajos.php'><input type='button' value='Continuar' class='btn btn-primary'></a>
    </div>
    ");
