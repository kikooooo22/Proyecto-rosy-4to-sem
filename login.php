<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Evidence</title>
    <link href="bootstrap-5.1.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="tutifruti.css" rel="stylesheet">
    <script src="bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
</head>

<body style="background-color: #E1BEE7">
<div class="container-fluid p-2" style="background-color: #9C27B0">
    <h2 style="color: white">EVIDENCE</h2>
</div>
<br>
<div class="borde container" align="center" style="background-color: white">
    <h3>Iniciar Sesión</h3>
    <div>
        <form method="get">
            <label for="mail">Correo</label><br>
            <input placeholder="Correo Electronico..." type="text" id="mail" name="mail">
            <br><br>
            <label for="pass">Contraseña</label><br>
            <input type="password" id="pass" placeholder="Password" name="pass">
            <br><br>
            <input type="submit" value="Ingresar">
        </form>
        <?php
        if($_GET){
            $placemail="maestrousuario@gmail.com";
            $placepass="1234";
            $correo=$_GET["mail"];
            $password=$_GET["pass"];
            if($correo==$placemail and $password==$placepass){
                header("location: ingresar.html");
                exit;
            }else{
                echo("<br><h4 class='text-warning'>ERROR: Correo o Contraseña Incorrectos.</h4>");
            }
        }
        ?>
    </div>

</div>
</body>
<footer>
    <div class="container-fluid p-2" style="background-color: #9C27B0">
        <p align="right" style="color: white">Página por los Fluffy Boys</p>
    </div>
</footer>
</html>