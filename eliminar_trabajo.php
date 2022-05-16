<?php
    $id=$_GET["ID"];
    $conexion=mysqli_connect("localhost","root","","school");
    $query="DELETE FROM trabajo WHERE idTrabajo=$id";
    $res=mysqli_query($conexion,$query);
    echo("<h1>Trabajo borrado</h1>");
    echo("<a href='mostrar_trabajos.php'><input type='button' value='Continuar'></a>");