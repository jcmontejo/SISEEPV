<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Solicitud Servicio Social | SISEEPV</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Bootstrap-social-->
    <link rel="stylesheet" href="../css/bootstrap-social.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../empresas/home.php">INICIO</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="about.html">Egresados</a>
                    </li>
                    <li>
                        <a href="../empresas/empresas.php">Empresas</a>
                    </li>
                    <li>
                        <a href="contact.html">Proyectos Vinculados</a>
                    </li>
                    <!--<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="portfolio-1-col.html">1 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="portfolio-2-col.html">2 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="portfolio-3-col.html">3 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="portfolio-4-col.html">4 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="portfolio-item.html">Single Portfolio Item</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="blog-home-1.html">Blog Home 1</a>
                            </li>
                            <li>
                                <a href="blog-home-2.html">Blog Home 2</a>
                            </li>
                            <li>
                                <a href="blog-post.html">Blog Post</a>
                            </li>
                        </ul>
                    </li>-->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <?php echo $_SESSION['empresa']; ?> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                           
                            <li>
                                <a href="../empresas/bolsa.php" class="fa fa-suitcase"> </i> Bolsa de Trabajo</a>
                            </li>
                            <li>
                                <a href="../empresas/vacantes.php" class="fa fa-building-o">  Solicitud de Vacantes</a>
                            </li>
                            <li>
                                <a href="../empresas/residentes.php" class="fa fa-laptop">  Solicitud de Residentes</a>
                            </li>
                            <li>
                                <a href="../empresas/servicio.php" class="fa fa-book">  Solicitud de Servicio Social</a>
                            </li>
                            <li>
                                <a href="../libs/cerrarsesionempresa.php"><i class="fa fa-fw fa-power-off"></i> Salir</a></a>
                            </li>
                        </ul>
                    </li>
                    <!--<li>
                        <a href="#">Iniciar sesión</a>
                    </li>-->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">
    <!-- Intro Content -->

    <!-- Image Header -->
        <!--<div class="row">
            <div class="col-lg-12">
                <img class="img-responsive" src="../images/5.jpg" alt="">
            </div>
        </div>-->
        <!-- /.row -->
    <hr>
    <div class="row">
        <div class="col-md-8">
         <div class="item form-group">
                <h3>Solicitud Servicio Social</h3>
                
        </div>

        <div class="x_content">
        <form action="../libs/guardarservicio.php" method="POST">
            <div class="form-group">
                <label for="">Tareas a Realizar</label>
                <input type="text" name="task" placeholder="ingresar tareas a realizar" class="form-control">
            </div>
            <div class="form-gropu">
                <label for="">Área</label>
                <input type="text" name="area" placeholder="ingresar área a desempeñar" class="form-control">
            </div>
            <div class="form-gropu">
                <label for="">Contacto</label>
                <input type="text" name="contact" placeholder="ingresar teléfono ó e-mail" class="form-control">
                <input type="hidden" name="user_id" value="<?php echo $_SESSION['idempresa'];?>">
            </div>
            <br>
            <button class="btn btn-primary">Registrar</button>
        </form>
        <div class="row">
            <div class="col-md-8">
                <?php 
                    if (isset($_GET['mensaje']) && $_GET['mensaje'] == '1') {
                                    echo '<div class="alert alert-danger">
                                                <strong>Algo esta mal!</strong> uno ó más campos necesitan ser llenados.
                                            </div>';
                                }
                    if (isset($_GET['mensaje']) && $_GET['mensaje'] == '2') {
                                    echo '<div class="alert alert-danger">
                                                <strong>Algo esta mal!</strong> ya has llenado tus datos personales.
                                            </div>';
                                }
                    if (isset($_GET['mensaje']) && $_GET['mensaje'] == '3') {
                                    echo '<div class="alert alert-success">
                                                <strong>Muy bien!</strong> has guardado tus datos de perfil exitosamente.
                                            </div>';
                                }
                    if (isset($_GET['mensaje']) && $_GET['mensaje'] == '4') {
                                    echo '<div class="alert alert-success">
                                                <strong>!Error!</strong> llena tus datos de perfil de <a href="../empresas/registro.php">Empresa.</a>
                                            </div>';
                                }               
                 ?>
            </div>
        </div>
        </div>

        <br>
        <br>
        <br>
           
    </div>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    
                    <div class="copy text-center">
                    <p class="link"><span>&#169; Todos los derechos reservados |&nbsp;<a href="http://ittg.edu.mx/">Instituto Tecnológico de Tuxtla Gutiérrez</a></span></p>
                    </div>
                    <div class="copy text-center">
                    <p class="link">
                    Carretera Panamericana Km. 1080, C.P. 29050, Apartado Postal: 599
                    </p>
                    </div>
                    <div class="copy text-center">
                    <p class="link">
                    Tel. (961) 61 5 04 61 Fax: (961) 61 5 16 87
                    </p>
                    </div>
                    <div class="col-lg-4">
                        <div class="text-center">
                        <a href="twitter.com/radiotectuxtla" class="btn btn-social-icon btn-lg btn-twitter" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-lg']);"><span class="fa fa-twitter"></span></a>
                        <a href="facebook.com/radiotec.tuxtla" class="btn btn-social-icon btn-lg btn-facebook" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-lg']);"><span class="fa fa-facebook"></span></a>
                        <a href="youtube.com/user/TuxtlaTec" class="btn btn-social-icon btn-lg btn-github" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-lg']);"><span class="fa fa-youtube"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
