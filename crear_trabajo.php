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

</html>
