<?php 
// Include the database configuration file  
require_once 'conexion.php'; 
 
$No_lista = $_POST['No_lista']; 

// If file upload form is submitted 
$status = $statusMsg = ''; 
if(isset($_POST["submit"])){ 
    $status = 'error'; 
    if(!empty($_FILES["imagen"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["imagen"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['imagen']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
         
            // Insert image content into database 
            $insert = $mysqli->query("UPDATE evidencia SET Evidencia='$imgContent' WHERE alumno_No_lista=$No_lista"); 
             
            if($insert){ 
                $status = 'success'; 
                $statusMsg = "Subida con éxito."; 
            }else{ 
                $statusMsg = "Error al subir la imagen, intenta de nuevo."; 
            }  
        }else{ 
            $statusMsg = 'Solo se aceptan formatos JPG, JPEG, PNG, & GIF.'; 
        } 
    }else{ 
        $statusMsg = 'Por favor selecciona una imagen para subir.'; 
    } 
} 
 
?> 

<html>
    <?php
        require 'header.php';
    ?>
    <body>
        <div align="center">

            <div aling="center">
                <h1 class="h1 text-success"><?php echo $statusMsg; ?></h1>
            </div>

            <a href="subir_evidencias.php">
                <input type="submit" value="Regresar" class="btn btn-primary">
            </a>
        
        </div>
    </body>
</html>