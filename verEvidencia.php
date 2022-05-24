<?php 
require_once 'conexion.php'; 
$No_lista = $_POST['No_lista'];

$result = $mysqli->query("SELECT Evidencia FROM evidencia WHERE alumno_No_lista = $No_lista"); 
?>

<html>
    <body>
        <?php if($result->num_rows > 0){ 
                include 'header.php';
            ?>
        
            <div align="center" style="padding: 2% 0;">
                <?php while($row = $result->fetch_assoc()){ ?> 
                <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['Evidencia']); ?>" /> 
                <br>
                <?php } ?> 
            </div>

        <?php }else{ ?> 
            <h1>No se han subido evidencias</h1> 
        <?php } ?>
        
        <div align="center">
            <a href="subir_evidencias.php">
                <input type="submit" value="Regresar" class="btn btn-primary">
            </a>
        </div>
    </body>
</html>