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

    <title>Proyectos Vinculados</title>

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
                    <span class="sr-only" >Toggle navigation</span>
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
                <img class="img-responsive" src="../images/slider_bg_3.jpg" alt="">
            </div>
        </div>
        <!-- /.row -->
    <hr>
    <div class="row">
        <div class="col-md-8">
         <div class="col-md-8">
                <h2><span class="label label-danger">Proyectos Vinculados</span></h2>
                <p>La carrera de Ingenieria en Sistemas Computacionales del Instituto Tecnologico de Tuxtla Gutierrez ocupada por ser protagonista en el desarrollo del Estado Chiapas invita a la comunidad empresarial y diferentes sectores a exponernos sus necesidades, ideas o inquietudes en el desarrollo proyectos que se encuentren dentro del dominio de nuestros conocimientos.</p>                 
        </div>
        <div class="col-md-8">
            <h2><span class="label label-danger">Objetivo</span></h2>            
                <p>Ser protagonista en el desarrollo del Estado Chiapas y entre la comunidad empresarial y diferentes sectores productivos, con proyectos que se encuentren dentro del dominio de nuestros conocimientos.</p>            
        </div>

        <!-- Service List -->
        <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header"><span class="label label-primary"> Lineas de investigación</span></h2>                
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-3 img-portfolio">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-hover" src="../images/datos.jpg" alt="">
                </a>
                <h3>
                    <a>Tecnologías de Información y Base de Datos.</a>
                </h3>
                <p>Un sistema de información es un conjunto de elementos que interactúan entre sí con el fin de apoyar las actividades de una empresa o negocio, el equipo computacional: el hardware necesario para que el sistema de información pueda operar.</p>
            </div>
            <div class="col-md-3 img-portfolio">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-hover" src="../images/inteligencia.jpg" alt="">
                </a>
                <h3>
                    <a>Inteligencia Artificial.</a>
                </h3>
                <p>La inteligencia artificial (IA) puede definirse como el medio por el cual las computadoras, los robots y otros dispositivos realizan tareas que normalmente requieren de la inteligencia humana.</p>
            </div>
            <div class="col-md-3 img-portfolio">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-hover" src="../images/education.jpg" alt="">
                </a>
                <h3>
                    <a>Computación Educativa</a>
                </h3>
                <p>La informática educativa tiene tres esferas de aplicación: como objeto de estudio, como gestión administrativa y como medio de enseñanza.</p>
            </div>
            <div class="col-md-3 img-portfolio">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-hover" src="../images/arquitectura.jpg" alt="">
                </a>
                <h3>
                    <a>Arquitectura de Cómputo</a>
                </h3>
                <p>La arquitectura de computadoras es el diseño conceptual y la estructura operacional fundamental de un sistema de computadoras.</p>
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
                <div class="well">
                    <h4>Acciones</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="jerarquia.php">Organización Jerárquica</a>
                                </li>                                
                                <li><a href="docentes.php">Cuerpo Académico</a>
                                </li>                                                               
                            </ul>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">                    
                <h4>Titulación Integral</h4>            
                <p>En la materia de Taller de investigación I de séptimo semestre se les capacita para que expongan formalmente ante un jurado de tres profesores un proyecto, momento ideal para que nuestros estudiantes empiecen a trabajar con ustedes.
                <p>Posteriormente en la materia de "Taller de investigación II" de octavo semestre y aprovechando el programa de servicio social continuan desarrollando su proyecto desde el enfoque metodológico y técnico.</p>
                <p>Finalmente en la materia residencia profesional de noveno deben concluir con el proyecto, debiendo cubrir un total de 480 horas dentro de la empresa.</p>  
                <p>Para mayores informes dirigirse al responsable de la Oficina de Proyectos de Vinculación M.C. Aida Guillermina Cossio Martínez al telefóno 61-50461 ext 319 Departamento de Sistemas Computacionales o al correo acossio_m@yahoo.com.mx</p>          
        </div>
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
