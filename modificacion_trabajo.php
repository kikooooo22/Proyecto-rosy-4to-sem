<?php
    $id=$_GET["ID"];
    $nombre=$_GET["nombre"];
    $materia=$_REQUEST["materia"];
    $valor=$_GET["ponderacion"];
    $fecha=$_GET["fecha"];

    $conexion=mysqli_connect("localhost","root","","school");
    $query="UPDATE trabajo SET Nom_trabajo='$nombre', materia_ID_materia=$materia, Ponderacion=$valor, Fecha='$fecha' WHERE idTrabajo=$id";
    $res=mysqli_query($conexion,$query);

    echo("<h1>Modificación Realizada con exito</h1>");
    echo("<a href='mostrar_trabajos.php'><input type='button' value='Continuar'></a>");<?php
    include 'header.php';
    $id=$_GET["ID"];<?php
    include 'header.php';<?php
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
