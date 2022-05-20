<?php
include 'header.php';
include 'footer.php';
require("conexion.php");

if($_GET){
    
    $query = "SELECT * FROM alumno";
    $filtros = false;
    $extra = "";
    
    $No_lista = $_GET["filtroNo_lista"];
    $No_lista = intval($No_lista);
    $Nombre = $_GET["filtroNombre"];
    $Apellido_pat = $_GET["filtroApellido_pat"];
    $Apellido_mat = $_GET["filtroApellido_mat"];
    
    

    if($No_lista != NULL or $No_lista != 0){
        $filtros = true;
        $extra = " No_lista = $No_lista";
    }else{
        $No_lista = null;
    }
    
    if($Nombre != ""){
        $filtros = true;
        if($extra == ""){
            $extra = " Nombre like '$Nombre%'";
        }else{
            $extra = $extra." AND Nombre like '$Nombre%'";
        }
    }
    
    if($Apellido_pat != ""){
        $filtros = true;
        if($extra == ""){
            $extra = " Apellido_pat like '$Apellido_pat%'";
        }else{
            $extra = $extra." AND Apellido_pat like '$Apellido_pat%'";
        }
    }
    
    if($Apellido_mat != ""){
        $filtros = true;
        if($extra == ""){
            $extra = " Apellido_mat like '$Apellido_mat%'";
        }else{
            $extra = $extra." AND Apellido_mat like '$Apellido_mat%'";
        }
    }
    
    if($filtros){
        $query = $query." WHERE".$extra;
        $filtros = false;
        $resultado= mysqli_query($mysqli,$query) or die(mysqli_error($mysqli));
    }else{
        $query = "SELECT * FROM alumno";
        $resultado= mysqli_query($mysqli,$query) or die(mysqli_error($mysqli));
    }
    
}else{
    $No_lista = null;
    $Nombre = "";
    $Apellido_pat = "";
    $Apellido_mat = "";
    $query = "SELECT * FROM alumno";
    $resultado= mysqli_query($mysqli,$query) or die(mysqli_error($mysqli));
    
}

?>

<html>
    
    <body>
        <br>
        <div class="">
            <div align="center" class="card">
                <div class="card-header">Dar de Alta:</div>
                <form method="get" action="alumnos_altas.php" class="form p-2">
                    <label for="No_lista" class="form-label">Numero de Lista:</label>
                    <input type="text" name="No_lista" class="texto" placeholder="01">
                    <label for="Nombre" class="form-label">Nombre:</label>
                    <input type="text" name="Nombre" class="texto" placeholder="Nombre">
                    <label for="Apellido_pat" class="form-label">Apellido Paterno:</label>
                    <input type="text" name="Apellido_pat" class="texto" placeholder="Paterno">
                    <label for="Apellido_mat" class="form-label">Apellido Materno:</label>
                    <input type="text" name="Apellido_mat" class="texto" placeholder="Materno">
                    <input type="submit" value="Dar de alta" class="btn btn-primary">
                </form>
            </div>
        </div>
        
        <br>
        <div class="card">
            <div class="card-header">
                Lista de alumnos
            </div>
            
            <div align="center" class="card">
                <form method="get" action="alumnos.php" class="form p-2">
                    <label for="No_lista" class="form-label">Numero de Lista:</label>
                    <input type="text" name="filtroNo_lista" class="texto" placeholder="01" value="<?php echo $No_lista; ?>">
                    <label for="Nombre" class="form-label">Nombre:</label>
                    <input type="text" name="filtroNombre" class="texto" placeholder="Nombre" value="<?php echo $Nombre; ?>">
                    <label for="Apellido_pat" class="form-label">Apellido Paterno:</label>
                    <input type="text" name="filtroApellido_pat" class="texto" placeholder="Paterno" value="<?php echo $Apellido_pat; ?>">
                    <label for="Apellido_mat" class="form-label">Apellido Materno:</label>
                    <input type="text" name="filtroApellido_mat" class="texto" placeholder="Materno" value="<?php echo $Apellido_mat; ?>">
                    <input type="submit" value="Aplicar filtros" class="btn btn-primary">
                    <a href="alumnos.php">
                        <input type="button" value="Borrar filtros" class="btn btn-primary">
                    </a>
                </form>
            </div>
                
            <div class="p-4">
                
                <table class="table align-middle table-bordered">
                    <thead>
                    <tr class="table-dark">
                        <td align="center" class="titulotabla"><b>N° de Lista</b></td>
                        <td align="center" class="titulotabla"><b>Nombre</b></td>
                        <td align="center" class="titulotabla"><b>Apellido paterno</b></td>
                        <td align="center" class="titulotabla"><b>Apellido materno</b></td>
                        <td align="center" class="titulotabla"><b>Modificar</b></td>
                        <td align="center" class="titulotabla"><b>Eliminar</b></td>
                    </tr>
                    </thead>

                    <tbody align="center">

                    <?php while ($row=mysqli_fetch_array($resultado)){ ?>

                        <tr>
                            <td><?php echo $row['No_lista']?></td>
                            <td><?php echo $row['Nombre']?></td>
                            <td><?php echo $row['Apellido_pat']?></td>
                            <td><?php echo $row['Apellido_mat']?></td>
                            <td>
                                <a href="Modificar_alumno.php?No_lista=<?php echo $row['No_lista'] ?>">
                                    <input type="submit" value="Modificar" class="btn btn-warning">
                                </a>
                            </td>
                            <td>
                                <a href="Eliminar_alumno.php?No_lista=<?php echo $row['No_lista'] ?>">
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
