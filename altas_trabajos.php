<?php
    $conexion=mysqli_connect("localhost","root","","school");
    $nombre=$_GET["name"];
    $valor=$_GET["valor"];
    $fecha=$_GET["fecha"];
    $materia=$_REQUEST["materia"];

    if($nombre!="" and $valor!="" and $fecha!=""){
        $sql = "SELECT COUNT(*) total FROM trabajo";
        $result =mysqli_query($conexion,$sql);
        $fila = mysqli_fetch_assoc($result);
        $num= $fila['total'];
        $query="INSERT INTO trabajo (idTrabajo, materia_ID_materia, nom_Trabajo, Ponderacion, Fecha) VALUES ($num+1,$materia,'$nombre',$valor, '$fecha')";
        $res= mysqli_query($conexion,$query);
        echo("<h1>Trabajo creado con exito.</h1>");
        echo("<a href='crear_trabajo.php'><input type='button' value='Continuar'></a>");
    }else{
        echo("<h1>ERROR: Uno de los campos esta incompleto.</h1>");
        echo("<a href='crear_trabajo.php'><input type='button' value='Regresar'></a>");
    }

