<html>
<head>

</head>
<body>
    <?php
        $id=$_GET["ID"];
    ?>
    <h1>¿Esta seguro de borrar este trabajo?</h1><br>
    <a href="eliminar_trabajo.php?ID=<?php echo $id?>"><input type="button" value="SI"></a>
    <a href="mostrar_trabajos.php"><input type="button" value="NO"></a>
</body>
</html>