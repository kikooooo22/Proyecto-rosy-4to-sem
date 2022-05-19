<?php
    include 'header.php';
    $id=$_GET["ID"];
    $nombre=$_GET["nombre"];
    $materia=$_REQUEST["materia"];
    $valor=$_GET["ponderacion"];
    $fecha=$_GET["fecha"];

    $conexion=mysqli_connect("localhost","root","","school");
    $query="UPDATE trabajo SET Nom_trabajo='$nombre', materia_ID_materia=$materia, Ponderacion=$valor, Fecha='$fecha' WHERE idTrabajo=$id";
    $res=mysqli_query($conexion,$query);

    echo("
    <div align='center'>
        <h1 class='h1 display-2'>Modificación Realizada con exito</h1>
        <a href='mostrar_trabajos.php'><input type='button' value='Continuar' class='btn btn-primary'></a>
    </div>
    ");