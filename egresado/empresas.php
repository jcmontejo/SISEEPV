<?php session_start(); 
    if (empty($_SESSION['idegresado'])) {
        echo '<script language="javascript">window.location="../seguridad/login.php"</script>;';
            exit();
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Empresas | SISEEPV</title>

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
                <a class="navbar-brand" href="home.php">INICIO</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="egresados.php">Egresados</a>
                    </li>
                    <li>
                        <a href="empresas.php">Empresas</a>
                    </li>
                    <li>
                        <a href="proyectos_vinculados.php">Proyectos Vinculados</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['egresado']; ?><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="../egresado/personaldata.php"><i class="fa fa-fw fa-home"></i>Llenar datos personales</a>
                            </li>
                            <li>
                                <a href="../egresado/labordata.php"><i class="fa fa-fw fa-building"></i>Llenar datos laborales</a>
                            </li>
                            <li>
                                <a href="../egresado/estudiosdata.php"><i class="fa fa-fw fa-graduation-cap"></i>Llenar datos académicos</a>
                            </li>
                            <li>
                                <a href="../egresado/cita.php"><i class="fa fa-fw fa-file"></i>Solicitar cita</a>
                            </li>
                            <li>
                                <a href="../libs/cerrarsesionegresado.php"><i class="fa fa-fw fa-power-off"></i> Salir</a></a>
                            </li>
                        </ul>
                    </li>
                    <!--<li>
                        <a href="seguridad/login.php">Iniciar sesión</a>
                    </li>->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">
    <!-- Intro Content -->
    <hr>
    <!-- Image Header -->
        <div class="row">
            <div class="col-lg-12">
                <img class="img-responsive" src="../images/3.jpg" alt="">
            </div>
        </div>
        <!-- /.row -->
    <hr>
    <div class="row">
        <div class="col-md-8">
         <div class="col-md-8">
                <h2>Seguimiento a Empresas</h2>
                <p>Esta sección del Seguimiento y Vinculación de Empresas actúa como enlace entre alumnos, egresados y empresas, relaciona a egresados y alumnos del ITTG con probables fuentes de trabajo y promueve sus perfiles profesionales</p>
        </div>
        <div class="col-md-6">
                <h3>Objetivos:</h3>
                <li>Promover el perfil profesional de nuestros alumnos y egresados en las empresas líderes en México.</li>
                <li>Ser un enlace entre nuestros alumnos, egresados y los empleadores.</li>
        </div>
        <!-- Service List -->
        <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><span class="label label-danger"> Servicios</span></h3>
            </div>
            <div class="col-md-4">
                <div class="media">
                    <div class="pull-left">
                        <span class="fa-stack fa-2x">
                              <i class="fa fa-circle fa-stack-2x text-info"></i>
                              <i class="fa fa-line-chart fa-stack-1x fa-inverse"></i>
                        </span> 
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Beneficios a los Empleadores</h4>
                        <p>Publica gratis tus ofertas laborales y selecciona los mejores talentos profesionales.</p>
                    </div>
                </div>
                <div class="media">
                    <div class="pull-left">
                        <span class="fa-stack fa-2x">
                              <i class="fa fa-circle fa-stack-2x text-danger"></i>
                              <i class="fa fa-line-chart fa-stack-1x fa-inverse"></i>
                        </span> 
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Beneficios a los universitarios</h4>
                        <p>Accede a vacantes en línea y contacta a organizaciones empleadoras.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="media">
                    <div class="pull-left">
                        <span class="fa-stack fa-2x">
                              <i class="fa fa-circle fa-stack-2x text-info"></i>
                              <i class="fa fa-briefcase fa-stack-1x fa-inverse"></i>
                        </span> 
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Bolsa de trabajo</h4>
                        <p>Facilita la búsqueda, prospección de empleos y fortalece la vinculación del entorno laboral con el ITTG.</p>
                    </div>
                </div>
                <div class="media">
                    <div class="pull-left">
                        <span class="fa-stack fa-2x">
                              <i class="fa fa-circle fa-stack-2x text-info"></i>
                              <i class="fa fa-child fa-stack-1x fa-inverse"></i>
                        </span> 
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Ferias de Empleo</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="media">
                    <div class="pull-left">
                        <span class="fa-stack fa-2x">
                              <i class="fa fa-circle fa-stack-2x text-danger"></i>
                              <i class="fa fa-pencil-square-o fa-stack-1x fa-inverse"></i>
                        </span> 
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Solicitudes</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
                    </div>
                </div>
                <div class="media">
                    <div class="pull-left">
                        <span class="fa-stack fa-2x">
                              <i class="fa fa-circle fa-stack-2x text-info"></i>
                              <i class="fa fa-phone-square fa-stack-1x fa-inverse"></i>
                        </span> 
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Mejor comunicación con el Instituto</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
        </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Buscar</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                    <!-- /.input-group -->
                </div>
                
                <!-- Blog Categories Well -->
                <!--<div class="well">
                    <h4>Acciones</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="seguridad/login.php">Registro de Empresa</a>
                                </li>
                                <li><a href="bolsa.php">Bolsa de trabajo</a>
                                </li>
                                <li><a href="seguridad/login.php">Solicitud de Vacantes</a>
                                </li>
                                <li><a href="seguridad/login.php">Solicitud de Residentes</a>
                                </li>
                                <li><a href="seguridad/login.php">Solicitud Servicio Social</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                   
                </div>-->

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Seguimiento a Empresas</h4>
                    <p>El Instituto Tecnologico de Tuxtla Gutiérrez, es una institución interesada en mantener el vinculo de identidad contigo.
                    A traves de este programa te damos la más cordial bienvenida para que conozcas los servicios que ofrecemos par ti.
                    Así mismo ponemos a tú dispocición esta página que favorecerá la comunicación, difusión y contacto permanente de la institución con la comunidad de ex-alumnos.</p>
                </div>

            </div>
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
