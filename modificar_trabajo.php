<html>
<head>
    <?php
    $id=$_GET["ID"];
    $conexion=mysqli_connect("localhost","root","","school");
    $query="SELECT * FROM trabajo WHERE idTrabajo=$id";
    $res=mysqli_query($conexion,$query);
    $values=mysqli_fetch_array($res);
    ?>
</head>
<body>
    <form method="get" action="modificacion_trabajo.php">
        <input type="hidden" value="<?php echo $id?>" name="ID">
        <label>Nombre: </label>
        <input type="text" value="<?php echo $values['Nom_trabajo']?>" name="nombre"><br>
        <label>Materia: </label>
        <select name="materia">
            <option value="0">Español</option>
            <option value="1">Matematicas</option>
            <option value="2">Ciencias Naturales</option>
            <option value="3">Historia</option>
            <option value="4">Geografia</option>
            <option value="5">Formacion C y E</option>
        </select><br>
        <label>Ponderacion: </label>
        <input type="text" value="<?php echo $values['Ponderacion']?>" name="ponderacion"><br>
        <label>Fecha: </label>
        <input type="date" value="<?php echo $values['Fecha']?>" name="fecha"><br>
        <input type="submit" value="Modificar">
        <a href="mostrar_trabajos.php"><input type="button" value="Regresar"></a>
    </form>
</body>
</html>