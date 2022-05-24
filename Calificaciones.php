<html>
    <head>
        <?php include 'header.php';
        include 'footer.php';    ?>
    </head>
    <body>
        <br>
        <div class="container">
            <table class="table table-bordered table-hover">
                <thead class="table-dark">
                    <tr align="center">
                        <td>No. Lista</td>
                        <td>Nombre</td>
                        <td>Paterno</td>
                        <td>Materno</td>
                        <td>Materia</td>
                        <td>Calificación</td>
                        <td>Trimestre</td>
                    </tr>
                </thead>
                <tbody align="center">
                    <?php
                        $conexion=mysqli_connect("localhost","root","","school");
                        $query="SELECT * FROM alumno";
                        $res=mysqli_query($conexion,$query);
                        while ($row=mysqli_fetch_array($res)){
                    ?>
                    <tr>
                        <td><?php echo($row['No_lista']); ?></td>
                        <td><?php echo($row['Nombre']); ?></td>
                        <td><?php echo($row['Apellido_pat']); ?></td>
                        <td><?php echo($row['Apellido_mat']); ?></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </body>
</html>