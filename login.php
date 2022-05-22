<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport"    content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author"      content="Fluffy boys">

    <title>Inicio de sesión</title>

    <link rel="shortcut icon" href="assets/images/gt_favicon.png">

    <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!-- Custom styles for our template -->
    <link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
    <link rel="stylesheet" href="assets/css/main.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<!-- Fixed navbar -->
<div class="navbar navbar-inverse navbar-fixed-top headroom" >
    <div class="container">
        <div class="navbar-header">
            <!-- Button for smallest screens -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" alt="Evidence"></a>
        </div>
    </div>
</div>
<!-- /.navbar -->

<header id="head" class="secondary"></header>

<!-- container -->
<div class="container">

    <ol class="breadcrumb">
        <li><a href="index.html">Inicio</a></li>
        <li class="active">Acceso de usuario</li>
    </ol>

    <div class="row">

        <!-- Article main content -->
        <article class="col-xs-12 maincontent">
            <header class="page-header">
                <h1 class="page-title">Inicio de sesión</h1>
            </header>

            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3 class="thin text-center">Introduzca su usario y contraseña</h3>
                        <p class="text-center text-muted">Si no tiene cuenta de clic, <a href="signup.html">aquí</a> para crear una cuenta nueva, en caso de que requiera cambiar contraseña presione clic en "¿Olvidó su contraseña?". </p>
                        <hr>

                        <form method="get">
                            <div class="top-margin">
                                <label>Usuario/Correo <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="mail">
                            </div>
                            <div class="top-margin">
                                <label>Contraseña <span class="text-danger">*</span></label>
                                <input type="password" class="form-control" name="pass">
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-lg-8">
                                    <b><a href="">¿Olvidó su contraseña?</a></b>
                                </div>
                                <div class="col-lg-4 text-right">
                                    <button class="btn btn-action" type="submit">Iniciar</button>
                                </div>
                            </div>
                        </form>
                        <?php
                        if($_GET){
                            $placemail="maestrousuario@gmail.com";
                            $placepass="1234";
                            $correo=$_GET["mail"];
                            $password=$_GET["pass"];
                            if($correo==$placemail and $password==$placepass){
                                header("location: inicio.html");
                                exit;
                            }else{
                                echo("<br><h4 class='text-warning'>ERROR: Correo o Contraseña Incorrectos.</h4>");
                            }
                        }
                        ?>
                    </div>
                </div>

            </div>

        </article>
        <!-- /Article -->

    </div>
</div>	<!-- /container -->


<footer id="footer" class="top-space">
</footer>

<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="assets/js/headroom.min.js"></script>
<script src="assets/js/jQuery.headroom.min.js"></script>
<script src="assets/js/template.js"></script>
</body>
</html>
