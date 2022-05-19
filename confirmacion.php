<html>
<head>

</head>
<body>
    <?php
        include 'header.php';
        $id=$_GET["ID"];
    ?>
    <div align="center">
        <h1 class="h1 display-2">¿Esta seguro de borrar este trabajo?</h1><br>
        <a href="eliminar_trabajo.php?ID=<?php echo $id?>"><input type="button" value="SI" class="btn btn-success"></a>
        <a href="mostrar_trabajos.php"><input type="button" value="NO" class="btn btn-danger"></a>
    </div>
</body>
</html>