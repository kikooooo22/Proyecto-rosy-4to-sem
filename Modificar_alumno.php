<?php

	require('conexion.php');	
	$No_lista=$_GET['No_lista'];
    $id=$No_lista;

    $query="start transaction";
	$query="SELECT No_lista, Nombre, Apellido_pat, Apellido_mat FROM alumno WHERE No_lista='$No_lista'";
	$resultado=$mysqli->query($query);	
	$row=mysqli_fetch_array($resultado);	

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
                margin: 2% 3%;
                
            }
            
            h1{
                font-size: 2.3vw;
            }
            
            .boton{
                align-content: center;
                height: 7%;
                width: 20%;
                font-size: 1.5vw;
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
            
            .texto{
                align-content: center;
                width: 50%;
                height: 8%;
                font-size: 1.4vw;
                text-align: left;
                border: none;
                border-radius: 6px;
                padding-left: 1%;
            }
            
            p{
                font-size: 1.6vw;
            }
        
        </style>
        
        <div align="center">
            
            <form method="get" action="Modi_alumno.php">
                <table width="100%">
                    
                    <!-- Para poder pasar el numero de lista antiguo y evitar errores de variables-->
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    
                    <tr>
                        <td width="30%" style="text-align: right;">
                            <p>Número de lista: </p>
                        </td>
                        <td width="70%" style="content-align: left;">
                            <input type="text" name="No_lista" class="texto" value="<?php echo $row['No_lista']; ?>">
                        </td>
                    </tr>
                    
                    <tr>
                        <td width="30%" style="text-align: right;">
                            <p>Nombre: </p>
                        </td>
                        <td width="70%" style="content-align: left;">
                            <input type="text" name="Nombre" class="texto" value="<?php echo $row['Nombre']; ?>">
                        </td>
                    </tr>
                    
                    <tr>
                        <td width="30%" style="text-align: right;">
                            <p>Apellido paterno: </p>
                        </td>
                        <td width="70%" style="content-align: left;">
                            <input type="text" name="Apellido_pat" class="texto" value="<?php echo $row['Apellido_pat']; ?>">
                        </td>
                    </tr>
                    
                    <tr>
                        <td width="30%" style="text-align: right;">
                            <p>Apellido materno: </p>
                        </td>
                        <td width="70%" style="content-align: left;">
                            <input type="text" name="Apellido_mat" class="texto" value="<?php echo $row['Apellido_mat']; ?>">
                        </td>
                    </tr>
                
                </table>
                <br>
                <input type="submit" value="Guardar cambios" class="boton">
                <br><br>
                <a href="alumnos.php">
                    <input type="button" value="Regresar" class="boton">
                </a>
                
            </form>
            
        </div>
    
    </body>

</html>