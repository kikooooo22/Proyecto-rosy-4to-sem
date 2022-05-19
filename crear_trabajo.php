<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Evidence</title>
    <link href="bootstrap-5.1.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="tutifruti.css" rel="stylesheet">
    <script src="bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
</head>

<body>
    <form method="get" action="altas_trabajos.php">
        <label>Nombre del trabajo:</label><br>
        <input type="text" name="name"><br>
        <label>Valor del trabajo:</label><br>
        <input type="text" name="valor"><br>
        <label>Materia</label><br>
        <select name="materia">
            <option value="0">Español</option>
            <option value="1">Matematicas</option>
            <option value="2">Ciencias Naturales</option>
            <option value="3">Historia</option>
            <option value="4">Geografia</option>
            <option value="5">Formacion C y E</option>
        </select><br>
        <label>Fecha:</label><br>
        <input type="date" name="fecha">
        <br><br>
        <input type="submit">
    </form>
</body>

</html><!DOCTYPE html>
<html lang="en">
<?php include 'header.php' ?>
<head>
    <meta charset="UTF-8">
    <title>Evidence</title>
</head>
<br>
<body>
    <div class="row d-flex justify-content-center">
        <div class="p-1"></div>
        <div class="card col-sm-4">
            <div class="card-header">
                Ingresar datos:
            </div>
            <form method="get" action="altas_trabajos.php" class="p-4">
                <label class="form-label">Nombre del trabajo:</label><br>
                <input type="text" name="name" class="form-control"><br>
                <label class="form-label">Valor del trabajo:</label><br>
                <input type="text" name="valor" class="form-control"><br>
                <label class="form-label">Materia</label><br>
                <select name="materia" class="form-control">
                    <option value="0">Español</option>
                    <option value="1">Matematicas</option>
                    <option value="2">Ciencias Naturales</option>
                    <option value="3">Historia</option>
                    <option value="4">Geografia</option>
                    <option value="5">Formacion C y E</option>
                </select><br>
                <label class="form-label">Fecha:</label><br>
                <input type="date" name="fecha" class="form-control">
                <br><br>
                <input type="submit" class="btn btn-primary">
            </form>
        </div>
    </div>
</body>
<?php include 'footer.php' ?>
</html>

