<?php
    include 'header.php';
    $conexion=mysqli_connect("localhost","root","","school");
    $nombre=$_GET["name"];
    $valor=$_GET["valor"];
    $fecha=$_GET["fecha"];
    $materia=$_REQUEST["materia"];

    function comprobar($conexion,$materia,$nombre,$valor, $fecha){
        $cont=1;
        while (true){
            $send="SELECT * FROM trabajo WHERE idTrabajo = $cont";
            $obtener=mysqli_query($conexion, $send);
            $datos=mysqli_fetch_array($obtener);
            if(!$datos){
                $query="INSERT INTO trabajo (idTrabajo, materia_ID_materia, nom_Trabajo, Ponderacion, Fecha) VALUES ($cont,$materia,'$nombre',$valor, '$fecha')";
                $res= mysqli_query($conexion,$query);
                $q="SELECT * FROM alumno";
                $obt=mysqli_query($conexion, $q);
                while ($alumnos=mysqli_fetch_array($obt)){
                    $query2="INSERT INTO evidencia (Trabajo_idTrabajo, alumno_No_lista) VALUES ($cont, ".$alumnos['No_lista'].")";
                    $eser= mysqli_query($conexion, $query2);
                }
                return;
            }else{
                $cont++;
            }
        }
    }

    if($nombre!="" and $valor!="" and $fecha!=""){
        comprobar($conexion,$materia,$nombre,$valor, $fecha);
        echo("
        <br>
        <div class='d-flex justify-content-center'>
            <div align='center'>
            <h1 class='h1 display-2 text-success '>Trabajo creado con exito.</h1>
            <br>
            <a href='crear_trabajo.php' ><input type='button' value='Continuar' class='btn btn-primary'></a>
            </div>
        </div>
        ");

    }else{
        echo("
        <div class='justify-content-center'>
            <h1 class='h1 display-2 text-danger '>ERROR: Uno de los campos esta incompleto.</h1>
            <a href='crear_trabajo.php' class='btn-danger'><input type='button' value='Regresar' class='btn btn-primary'></a>
        </div>
        ");
    }

