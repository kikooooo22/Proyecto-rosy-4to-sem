<?php
    include 'header.php';
    $id=$_GET["ID"];
    $conexion=mysqli_connect("localhost","root","","school");
    $query="DELETE FROM trabajo WHERE idTrabajo=$id";
    $res=mysqli_query($conexion,$query);
    echo("
    <div align='center'>
        <h1 class='h1 display-2'>Trabajo borrado</h1>
        <a href='mostrar_trabajos.php'><input type='button' value='Continuar' class='btn btn-primary'></a>
    </div>
    ");