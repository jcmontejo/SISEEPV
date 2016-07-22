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

    <title>Asesores</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Cuerpo Académico</h1>                
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-4 img-portfolio">                
                    <img class="img-responsive img-hover" src="../images/user.jpg" alt="">
                </a>
                <h3>
                    <a>Dr. Jose Alberto Morales Mancilla</a>
                </h3>
                <p>Docente de tiempo completo, mancilla@iitg.edu</p>                
            </div>
            <div class="col-md-4 img-portfolio">                
                    <img class="img-responsive img-hover" src="../images/user.jpg" alt="">
                </a>
                <h3>
                    <a>Dr. Héctor Guerra Crespo.</a>
                </h3>
                <p>Docente de tiempo complet, hcrespo@ittg.edu</p>
            </div>
            <div class="col-md-4 img-portfolio">                
                    <img class="img-responsive img-hover" src="../images/user.jpg" alt="">
                </a>
                <h3>
                    <a>M.C Aída Guillermina Cossio Martinez</a>
                </h3>
                <p>Docente de tiempo completo, cossio@iitg.edu</p>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-4 img-portfolio">                
                    <img class="img-responsive img-hover" src="../images/user.jpg" alt="">
                </a>
                <h3>
                    <a>M.C Imelda Valles Lopez</a>
                </h3>
                <p>Docente de tiempo completo, imelda@iitg.edu</p>
            </div>
            <div class="col-md-4 img-portfolio">                
                    <img class="img-responsive img-hover" src="../images/user.jpg" alt="">
                </a>
                <h3>
                    <a>M.C Octavio Rios Tercero</a>
                </h3>
                <p>Docente de tiempo completo, oarios@ittg.edu</p>
            </div>
            <div class="col-md-4 img-portfolio">                
                    <img class="img-responsive img-hover" src="../images/user.jpg" alt="">
                </a>
                <h3>
                    <a>M.C. Jorge Octavio Guzmán Sánches</a>
                </h3>
                <p>Docente de tiempo completo, guzman@ittg.edu</p>
            </div>
        </div>

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-4 img-portfolio">                
                    <img class="img-responsive img-hover" src="../images/user.jpg" alt="">
                </a>
                <h3>
                    <a>M.C. Walter Torres Robledo</a>
                </h3>
                <p>Docente de tiempo completo, walter@ittg.edu</p>
            </div>
            <div class="col-md-4 img-portfolio">                
                    <img class="img-responsive img-hover" src="../images/user.jpg" alt="">
                </a>
                <h3>
                    <a>M.C. Francisco Suarez ruiz</a>
                </h3>
                <p>Docente de tiempo completo, paco@ittg.edu</p>
            </div>
            <div class="col-md-4 img-portfolio">                
                    <img class="img-responsive img-hover" src="../images/user.jpg" alt="">
                </a>
                <h3>
                    <a>Dr. Jesús Carlos Sánchez Guzmán.</a>
                </h3>
                <p>Docente de tiempo completo, paco@ittg.edu</p>
            </div>
        </div>
        <!-- /.row -->
        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-4 img-portfolio">                
                    <img class="img-responsive img-hover" src="../images/user.jpg" alt="">
                </a>
                <h3>
                    <a>Ing. Daniel Ríos García.</a>
                </h3>
                <p>Docente de medio tiempo completo, daniel@iitg.edu</p>                
            </div>
            <div class="col-md-4 img-portfolio">                
                    <img class="img-responsive img-hover" src="../images/user.jpg" alt="">
                </a>
                <h3>
                    <a>Ing. Miguel Arturo Vázquez Velázquez.</a>
                </h3>
                <p>Docente de medio tiempo completo, daniel@iitg.edu</p>
            </div>
            <div class="col-md-4 img-portfolio">                
                    <img class="img-responsive img-hover" src="../images/user.jpg" alt="">
                </a>
                <h3>
                    <a>M.C. María Delina Culebro Farrera.</a>
                </h3>
                <p>Docente de medio tiempo, delina@iitg.edu</p>
            </div>
        </div>
        <!-- /.row -->
        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-4 img-portfolio">                
                    <img class="img-responsive img-hover" src="../images/user.jpg" alt="">
                </a>
                <h3>
                    <a>Dr. Madaín Pérez Patricio.</a>
                </h3>
                <p>Docente de medio tiempo, madain@iitg.edu</p>
            </div>
            <div class="col-md-4 img-portfolio">                
                    <img class="img-responsive img-hover" src="../images/user.jpg" alt="">
                </a>
                <h3>
                    <a>Dra. María Candelaria Gutiérrez Gómez.</a>
                </h3>
                <p>Docente de medio tiempo, maria@iitg.edu</p>
            </div>
            <div class="col-md-4 img-portfolio">                
                    <img class="img-responsive img-hover" src="../images/user.jpg" alt="">
                </a>
                <h3>
                    <a>M.C. Galdino Belizario Nango Solis.</a>
                </h3>
                <p>Docente de medio tiempo, correo@iitg.edu</p>
            </div>
        </div>
        <!-- /.row -->
        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-4 img-portfolio">                
                    <img class="img-responsive img-hover" src="../images/user.jpg" alt="">
                </a>
                <h3>
                    <a>M.C. María Guadalupe Monjarás Velasco.</a>
                </h3>
                <p>Docente de medio tiempo, correo@iitg.edu</p>
            </div>
            <div class="col-md-4 img-portfolio">                
                    <img class="img-responsive img-hover" src="../images/user.jpg" alt="">
                </a>
                <h3>
                    <a>M.C. Ciclalli Cabrera García.</a>
                </h3>
                <p>Docente de medio tiempo, correo@iitg.edu</p>
            </div>
            <div class="col-md-4 img-portfolio">                
                    <img class="img-responsive img-hover" src="../images/user.jpg" alt="">
                </a>
                <h3>
                    <a>M.C. Jorge Willam Figueroa Corzo.</a>
                </h3>
                <p>Docente de medio tiempo, correo@iitg.edu</p>
            </div>
        </div>
        <!-- /.row -->
        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-4 img-portfolio">                
                    <img class="img-responsive img-hover" src="../images/user.jpg" alt="">
                </a>
                <h3>
                    <a>M.C. Alicia González Laguna.</a>
                </h3>
                <p>Docente de medio tiempo, correo@iitg.edu</p>
            </div>
            <div class="col-md-4 img-portfolio">                
                    <img class="img-responsive img-hover" src="../images/user.jpg" alt="">
                </a>
                <h3>
                    <a>M.C. Raúl Paredes Trinidad.</a>
                </h3>
                <p>Docente de medio tiempo, correo@iitg.edu</p>
            </div>
            <div class="col-md-4 img-portfolio">                
                    <img class="img-responsive img-hover" src="../images/user.jpg" alt="">
                </a>
                <h3>
                    <a>Ing. Luis Alberto Ríos Coutiño.</a>
                </h3>
                <p>Docente de medio tiempo, correo@iitg.edu</p>
            </div>
        </div>
        <!-- /.row -->
        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-4 img-portfolio">                
                    <img class="img-responsive img-hover" src="../images/user.jpg" alt="">
                </a>
                <h3>
                    <a>M.C. Rosa Ilda Basave Gómez.</a>
                </h3>
                <p>Docente de medio tiempo, correo@iitg.edu</p>
            </div>
            <div class="col-md-4 img-portfolio">                
                    <img class="img-responsive img-hover" src="../images/user.jpg" alt="">
                </a>
                <h3>
                    <a>Dr. Pedro Antonio Chambe Morales.</a>
                </h3>
                <p>Docente de medio tiempo, correo@iitg.edu</p>
            </div>
            <div class="col-md-4 img-portfolio">                
                    <img class="img-responsive img-hover" src="../images/user.jpg" alt="">
                </a>
                <h3>
                    <a>Lic. Higinio García Mendoza.</a>
                </h3>
                <p>Docente de medio tiempo, correo@iitg.edu</p>
            </div>
        </div>
        <!-- /.row -->        
    </div>
        <!-- /.row -->

        <hr>

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

</body>

</html>
