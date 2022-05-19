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
        
        <!--
        <script type="text/javascript">
            if(!confirm("¿Estás seguro de querer borrar este registro?")){
                window.location.replace = "alumnos.php";
            }
        </script>
        -->
        
        <?php 
            require('conexion.php');
            $No_lista=$_GET['No_lista'];
            $query="DELETE FROM alumno WHERE No_lista='$No_lista'";
            $resultado=$mysqli->query($query);
        ?>
        
        <div>
        
            <?php if($resultado>0){?>

            <div aling="center" >
                <h1>Borrado con éxito</h1>
            </div>

            <?php } else {?>

            <div aling="center">
                <h1>No se ha podido borrar el registro</h1>
            </div>

            <?php } ?>

            <a href="alumnos.php">
                <input type="submit" value="Regresar" class="boton">
            </a>
        
        </div>
        
    </body>

</html>