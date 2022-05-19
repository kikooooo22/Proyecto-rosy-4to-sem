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
            <option value="3">Historia</option><html>
<head>
    <?php
    include 'header.php';
    include 'footer.php';
    $id=$_GET["ID"];
    $conexion=mysqli_connect("localhost","root","","school");
    $query="SELECT * FROM trabajo WHERE idTrabajo=$id";
    $res=mysqli_query($conexion,$query);
    $values=mysqli_fetch_array($res);
    ?>
</head>
<body>
    <div class="row d-flex justify-content-center" align="center">
        <div class="p-1"></div>
        <div class="card col-sm-3">
            <div class="card-header">
                Datos
            </div>
            <form class="p-4" method="get" action="modificacion_trabajo.php">
                <input type="hidden" value="<?php echo $id?>" name="ID">
                <div>
                    <label class="form-label">Nombre: </label><br>
                    <input type="text" value="<?php echo $values['Nom_trabajo']?>" name="nombre"><br>
                </div>
                <div>
                    <label class="form-label">Materia: </label><br>
                    <select name="materia">
                        <option value="0">Español</option>
                        <option value="1">Matematicas</option>
                        <option value="2">Ciencias Naturales</option>
                        <option value="3">Historia</option>
                        <option value="4">Geografia</option>
                        <option value="5">Formacion C y E</option>
                    </select><br>
                </div>
                <div>
                    <label class="form-label">Ponderacion: </label><br>
                    <input type="text" value="<?php echo $values['Ponderacion']?>" name="ponderacion"><br>
                </div>
                <div>
                    <label class="form-label">Fecha: </label><br>
                    <input type="date" value="<?php echo $values['Fecha']?>" name="fecha"><br>
                </div>
                <br>
                <div>
                    <input type="submit" value="Modificar" class="btn btn-primary">
                    <a href="mostrar_trabajos.php"><input type="button" value="Regresar" class="btn btn-warning"></a>
                </div>

            </form>
        </div>
    </div>

</body>
</html>
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
