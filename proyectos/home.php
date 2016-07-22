<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Inicio | SISEEPV</title>

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
                        <a href="#">Empresas</a>
                    </li>
                    <li>
                        <a href="home.php">Proyectos Vinculados</a>
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
                    </li>-->
                    <!--<li class="dropdown">
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
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['docente']; ?><b class="caret"></b></a>
                        <ul class="dropdown-menu">                                                    
                            <li>
                                <a href="../libs/cerrarsesiondocente.php"><i class="fa fa-fw fa-power-off"></i> Salir</a></a>
                            </li>   
                            <li>
                                <a href="../proyectos/listaproyectos.php"><i class="fa fa-fw fa-list-alt"></i> Mis Proyectos</a></a>
                            </li>                         
                        </ul>
                    </li>
                    <!--<li>
                        <a href="">Iniciar sesión</a>
                    </li>-->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('../images/slide_bg1.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Egresados</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('../images/slide_bg2.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Empresas</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('../images/slide_bg3.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Proyectos Vinculados</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">
     <!-- Page Heading/Breadcrumbs -->
        <div class="row">
             <div class="col-lg-12">
                <h1 class="page-header">Te ofrecemos los siguientes
                    <small>Servicios</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="home.php">Inicio</a>
                    </li>
                    <li class="active">Servicios</li>
                </ol>
            </div>
        </div>
    
        <?php 
        include('../conexion/conexion.php');
        $userid = $_SESSION['iddocente'];
        $comprobar = $base->query("SELECT * FROM docent WHERE user_id = $userid ");
            $checar = $comprobar->rowCount();
            if ($checar !=0) {
                # code...
            }
            else{
                echo '<div class="alert alert-success">
                    <strong>Bienvenido!</strong> Te invitamos a llenar tu perfil de <a href="../proyectos/docent.php"> usuario.</a>
                </div>';
            }

         ?>

        <!-- /.row -->
            <!-- Service Panels -->
        <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Panel de servicios</h2>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-file-pdf-o fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4>Registrar Proyecto</h4>
                        <p>Ingresa y registra el o los proyectos de investigación en que haz trabajado.</p>
                        <a href="../proyectos/project.php" class="btn btn-primary">Ir</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-sitemap fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4>Organización Jerárquica</h4>
                        <p>Ingresa y conoce la organizacion jerarquica del "Departamento de Sistemas y Computación".</p>
                        <a href="../proyectos/jerarquia.php" class="btn btn-primary">Ir</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-user fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4>Cuerpo Académico</h4>
                        <p>Ingresa y conoce el listado del cuerpo académico del "Departamento de Sistemas y Computación".</p>
                        <a href="../proyectos/docentes.php" class="btn btn-primary">Ir</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-archive fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4>Mis Proyectos de Investigación</h4>
                        <p>Ingresa y conoce el lista de proyectos de investigación en que haz participado".</p>
                        <a href="../proyectos/listaproyectos.php" class="btn btn-primary">Ir</a>
                    </div>
                </div>
            </div>
        </div>
        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
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
