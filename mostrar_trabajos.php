<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Evidence</title>
    <link href="bootstrap-5.1.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="tutifruti.css" rel="stylesheet">
    <?php
        $conexion=mysqli_connect("localhost","root","","sch<?php include 'header.php' ?>
<?php include 'footer.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Evidence</title>
    <link href="bootstrap-5.1.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <?php
        $conexion=mysqli_connect("localhost","root","","school");
        $query="SELECT * FROM trabajo";
        $res=mysqli_query($conexion,$query);
    ?>
    <script src="bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="card">
        <div class="card-header">
            Lista de trabajos creados:
        </div>
        <div>
            <table class="table align-middle">
                <thead>
                <tr>
                    <td align="center" scope="col"><b>Nombre</b></td>
                    <td align="center" scope="col"><b>Materia</b></td>
                    <td align="center" scope="col"><b>Valor</b></td>
                    <td align="center" scope="col"><b>Fecha</b></td>
                    <td align="center" scope="col"><b>Modificar</b></td>
                    <td align="center" scope="col"><b>Eliminar</b></td>
                </tr>
                </thead>
                <tbody class="table align-middle" align="center">
                <?php while ($row=mysqli_fetch_array($res)){ ?>

                    <tr>
                        <td scope="row"><?php echo $row['Nom_trabajo']?></td>
                        <?php switch($row['materia_ID_materia']){
                            case 0:
                                echo("<td>Español</td>");
                                break;
                            case 1:
                                echo("<td>Matematicas</td>");
                                break;
                            case 2:
                                echo("<td>Ciencias Naturales</td>");
                                break;
                            case 3:
                                echo("<td>Historia</td>");
                                break;
                            case 4:
                                echo("<td>Geografia</td>");
                                break;
                            case 5:
                                echo("<td>Civica y Etica</td>");
                                break;
                        }?>
                        <td><?php echo $row['Ponderacion']?></td>
                        <td><?php echo $row['Fecha']?></td>
                        <td>
                            <a href="modificar_trabajo.php?ID=<?php echo $row['idTrabajo'] ?>">
                                <input type="submit" value="Modificar" class="btn btn-primary">
                            </a>
                        </td>
                        <td>
                            <a href="confirmacion.php?ID=<?php echo $row['idTrabajo'] ?>">
                                <input type="submit" value="Eliminar" class="btn btn-danger">
                            </a>
                        </td>
                    </tr>

                <?php }?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
ool");
        $query="SELECT * FROM trabajo";
        $res=mysqli_query($conexion,$query);
    ?>
    <script src="bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
</head>

<body>
    <table align="center">
        <thead>
        <tr>
            <td align="center"><b>Nombre</b></td>
            <td align="center"><b>Materia</b></td>
            <td align="center"><b>Valor</b></td>
            <td align="center"><b>Fecha</b></td>
            <td align="center"><b>Modificar</b></td>
            <td align="center"><b>Eliminar</b></td>
        </tr>
        </thead>
        <tbody>
        <?php while ($row=mysqli_fetch_array($res)){ ?>

            <tr>
                <td><?php echo $row['Nom_trabajo']?></td>
                <?php switch($row['materia_ID_materia']){
                    case 0:
                        echo("<td>Español</td>");
                        break;
                    case 1:
                        echo("<td>Matematicas</td>");
                        break;
                    case 2:
                        echo("<td>Ciencias Naturales</td>");
                        break;
                    case 3:
                        echo("<td>Historia</td>");
                        break;
                    case 4:
                        echo("<td>Geografia</td>");
                        break;
                    case 5:
                        echo("<td>Civica y Etica</td>");
                        break;
                }?>
                <td><?php echo $row['Ponderacion']?></td>
                <td><?php echo $row['Fecha']?></td>
                <td>
                    <a href="modificar_trabajo.php?ID=<?php echo $row['idTrabajo'] ?>">
                        <input type="submit" value="Modificar">
                    </a>
                </td>
                <td>
                    <a href="confirmacion.php?ID=<?php echo $row['idTrabajo'] ?>">
                        <input type="submit" value="Eliminar">
                    </a>
                </td>
            </tr>

        <?php }?>
        </tbody>
    </table>
</body>
</html>
