<?php 	
	require('conexion.php');
    $id=$_GET['id'];
	$No_lista=$_GET['No_lista'];
    $No_lista = intval($No_lista);
	$Nombre=$_GET['Nombre'];
	$Apellido_pat=$_GET['Apellido_pat'];
	$Apellido_mat=$_GET['Apellido_mat'];
	$query="UPDATE alumno SET No_lista='$No_lista', Nombre='$Nombre', Apellido_pat='$Apellido_pat', Apellido_mat='$Apellido_mat'
    WHERE No_lista='$id'";
	$resultado=$mysqli->query($query);	

?>

<html>

    <body>
    
        <style>
        
            html{
                background-color: dimgrey;
                color: aliceblue;
            }
            
            div{
                align-content: center;
                text-align: center;
                margin-top: 2%;
            }
            
            h1{
                font-size: 2.3vw;
            }
            
            .boton{
                align-content: center;
                height: 5%;
                width: 12%;
                font-size: 1.4vw;
                background-color: #cccccc;
                border: none;
                border-radius: 20px;
            }
            
            .boton:hover{
                background-color: #9c9c9c;
            }
            
            .boton:active{
                transform: scale(0.98);
            }
        
        </style>
        
        <div>
        
            <?php if($resultado>0){?>

            <div aling="center" >
                <h1>Modificado con éxito | <?php echo $No_lista ?> | <?php echo $id ?></h1>
            </div>

            <?php } else {?>

            <div aling="center">
                <h1>No se ha podido modificar el registro</h1>
            </div>

            <?php } ?>

            <a href="alumnos.php">
                <input type="submit" value="Regresar" class="boton">
            </a>
        
        </div>
        
    </body>

</html>