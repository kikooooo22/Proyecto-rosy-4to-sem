
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Contactanos</title>
    <?php include 'header.php'?>

</head>

<body>

<header id="header">
    <!--/.top-bar-->


    <!--/nav-->

</header>
<!--/header-->

<section id="contact-page">
    <div class="container">
        <div class="large-title text-center">
            <h2>Envianos un mensaje</h2>
            <p>Intentaremos constestar a todos los mensajes, no olvides de enviarnos el tuyo <br>Si quieres que subamos un clip tuyo envialo por el siguiente correo: Elotertres@hotmail.com</p>
        </div>
        <div class="container" align="center">
            <div class="status alert alert-success" style="display: none"></div>
            <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                <div class="col-sm-5 col-sm-offset-1">
                    <div class="form-group align-self-center">
                        <label>Nombre *</label>
                        <input type="text" name="Nombre" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label>Email *</label>
                        <input type="email" name="Email" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label>Telefono</label>
                        <input type="number" name="Telefono" class="form-control">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Mensaje</label>
                        <textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
                    </div>
                    <br>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>



<footer id="footer" class="container-fluid bg-dark fixed-bottom">
    <div class="row">
        <div class="col-md text-light" align="left">
            &copy; 2022.
        </div>
        <div class="col-md text-light" align="right">
            Página por los Fluffy Boys.
        </div>
    </div>
</footer>
</body>

</html>
