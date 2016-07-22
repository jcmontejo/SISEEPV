<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Proyectos</title>

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
                <a class="navbar-brand" href="home.php">INICIO</a>i
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="graduate.html">Egresados</a>
                    </li>
                    <li>
                        <a href="services.html">Empresas</a>
                    </li>
                    <li>
                        <a href="home.php">Proyectos Vinculados</a>
                    </li>                    
                     
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
                <h1 class="page-header">Registro de Proyectos</h1>                
            </div>
        </div>
        <!-- /.row -->
        
        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <form role="form" action="../libs/guardarproject.php" method="POST">
                                        <div class="form-group">
                                            <label>Nombre</label>
                                            <input type="text" name="project_name" class="form-control" placeholder="Nombre del proyecto">
                                        </div>
                                        <div class="form-group">
                                            <label type="text">Linea de Investigación</label>
                                            <select class="form-control" name="investigation_line">
                                                <option>Tecnologías de Información y Base de Datos</option>
                                                <option>Arquitectura de Computadoras</option>
                                                <option>Inteligencia Artificial</option>
                                                <option>Computo Móvil</option>     
                                            </select>
                                         </div>
                                         <div class="form-group">
                                            <label type="text">Estado</label>
                                            <select class="form-control" name="status">
                                                <option>Concluido</option>
                                                <option>Inconcluso</option>
                                                </select>       
                                         </div>
                                         <div class="form-group">
                                            <label type="text">Producto Obtenido</label>
                                            <select class="form-control" name="product_ontends">
                                                <option>Producto</option>
                                                <option>Servicio</option>
                                                </select>       
                                         </div>
                                         <div class="form-group">
                                            <label type="text">Financiamiento</label>
                                            <select class="form-control" name="funding">
                                                <option>Público</option>
                                                <option>Privado</option>
                                                </select>       
                                         </div>
                                        <div class="form-group">
                                            <label>Alumnos Participantes</label>
                                            <input type="text" name="participating_students" class="form-control" placeholder="Nombre de alumnos">
                                            <input type="hidden" name="user_id" value="<?php echo $_SESSION['iddocente'];?>">


                                        </div>
                                        <button class="btn ntn-default">Registrar</button> 
                                </form> 
                                <?php 
                    if (isset($_GET['mensaje']) && $_GET['mensaje'] == '1') {
                                    echo '<div class="alert alert-danger">
                                                <strong>Algo esta mal!</strong> uno ó más campos necesitan ser llenados.
                                            </div>';
                                }
                    if (isset($_GET['mensaje']) && $_GET['mensaje'] == '2') {
                                    echo '<div class="alert alert-danger">
                                                <strong>Algo esta mal!</strong> ya has registrado los datos de este proyecto.
                                            </div>';
                                }
                    if (isset($_GET['mensaje']) && $_GET['mensaje'] == '3') {
                                    echo '<div class="alert alert-success">
                                                <strong>Muy bien!</strong> has guardado los datos del proyecto con exito.
                                            </div>';
                                }
                    if (isset($_GET['mensaje']) && $_GET['mensaje'] == '4') {
                                    echo '<div class="alert alert-danger">
                                                <strong>Error!</strong> Tienes que guardar tus datos.
                                            </div>';
                                }
                 ?>
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

</body>

</html>
