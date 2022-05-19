<?php

require("conexion.php");
$query = "SELECT No_lista, Nombre, Apellido_pat, Apellido_mat FROM alumno";
$resultado= mysqli_query($mysqli,$query) or die(mysqli_error($mysqli));

?>

<html>
    
    <body>
        
        <style>
            
            html{
                background-color: dimgrey;
                color: aliceblue;
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
            
            .texto{
                align-content: center;
                width: 15%;
                height: 5%;
                font-size: 1.5vw;
                text-align: center;
                border: none;
                border-radius: 15px;
            }
            
            table{
                width: 100%;
                height: auto;
                
            }
            
            table,tr,td{
                border-collapse: collapse;
                border: 1px solid;
                border-color: aliceblue;
                font-size: 1.2vw;
                text-align: center;
                align-content: center;
            }
            
            tbody tr td{
                font-size: 1vw;
            }
            
            td{
                height: 2vw;
            }
            
            .titulotabla{
                background-color: #174154;
                color: aliceblue;
            }
            
            a input{
                border-radius: 20px;
                width: 80%;
                height: 70%;
                border: none;
            }
            
            a input:hover{
                background-color: #9c9c9c;
            }
            
            a input:active{
                transform: scale(0.98);
            }
        
        </style>
        
        <div align="center" style="margin:30px;">
            <form method="get" action="alumnos_altas.php">
        
                <input type="text" name="No_lista" class="texto" placeholder="01">
                <input type="text" name="Nombre" class="texto" placeholder="Nombre">
                <input type="text" name="Apellido_pat" class="texto" placeholder="Paterno">
                <input type="text" name="Apellido_mat" class="texto" placeholder="Materno">
                <input type="submit" value="Dar de alta" class="boton">

            </form>
        </div>
        
        <div align="center" style="margin:30px;">
        
            <table>
                <thead>
                    <tr>
                        <td align="center" class="titulotabla"><b>N° de Lista</b></td>
                        <td align="center" class="titulotabla"><b>Nombre</b></td>
                        <td align="center" class="titulotabla"><b>Apellido paterno</b></td>
                        <td align="center" class="titulotabla"><b>Apellido materno</b></td>
                        <td align="center" class="titulotabla"><b>Modificar</b></td>
                        <td align="center" class="titulotabla"><b>Eliminar</b></td>
                    </tr>
                </thead>
                
                <tbody>
                
                    <?php while ($row=mysqli_fetch_array($resultado)){ ?>
                    
                    <tr>
                        <td><?php echo $row['No_lista']?></td>
                        <td><?php echo $row['Nombre']?></td>
                        <td><?php echo $row['Apellido_pat']?></td>
                        <td><?php echo $row['Apellido_mat']?></td>
                        <td>
                            <a href="Modificar_alumno.php?No_lista=<?php echo $row['No_lista'] ?>">
                                <input type="submit" value="Modificar">
                            </a>
                        </td>
                        <td>
                            <a href="Eliminar_alumno.php?No_lista=<?php echo $row['No_lista'] ?>">                                
                                <input type="submit" value="Eliminar">
                            </a>
                        </td>
                    </tr>
                    
                    <?php }?>
                
                </tbody>
            
            </table>
        
        </div>
        
    </body>

</html>
