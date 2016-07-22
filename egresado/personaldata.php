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

    <title>Datos personales | SISEEPV</title>

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
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['egresado']; ?><b class="caret"></b></a>
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
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Llena tus datos
                    <small>personales</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->
        <form action="../libs/guardarpersonaldata.php" method="POST">
            <div class="col-md-8">
                <div class="form-group">
                    <label>CURP:</label>
                    <input type="text" class="form-control" name="curp" placeholder="Ingresa tú CURP">
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <label>Sexo:</label>
                   <select name="sexo" id="" class="form-control">
                       <option>Hombre</option>
                       <option>Mujer</option>
                   </select>
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <label>Fecha de nacimiento:</label>
                    <input type="date" class="form-control" name="birth_date" placeholder="Ingresa tú correo">
                    <input type="hidden" name="user_id" value="<?php echo $_SESSION['idegresado'];?>">
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <label>Domicilio:</label>
                    <input type="text" class="form-control" name="home" placeholder="Ingresa la dirección de tú domicilio">
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <label>Número de celurar:</label>
                    <input type="text" class="form-control" name="phone" placeholder="Ingresa tu número de celular">
                </div>
            </div>
            <div class="col-md-8">
                <input type="submit" class="btn btn-primary">
            </div>
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
                                    echo '<div class="alert alert-danger">
                                                <strong>Error!</strong> llena tu perfil de<a href="../egresado/personal.php"> usuario</a> antes de utilizar nuestros servicios.
                                            </div>';
                                }
                 ?>
            </div>
        </div>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; SISEEPV 2016</p>
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
