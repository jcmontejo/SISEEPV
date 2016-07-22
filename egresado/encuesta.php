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

    <title>Encuesta | SISEEPV</title>

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
                    <!--<li>
                        <a href="../seguridad/login.php">Iniciar sesión</a>
                    </li>-->
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
                <h3 class="page-header">Estimado
                    <small>egresado</small>
                </h3>
                <p>
                    El propósito del presente instrumento es obtener información confiable y pertinente sobre la ubicación y las actividades que desempeñan los egresados de la Carrera de Ingeniería en Sistemas Computacionales en el ámbito laboral; lo que permitirá apoyar la toma de decisiones y la planeación académica en el Instituto.
                </p>
                <p>
                    Las respuestas del cuestionario serán de uso exclusivo del Instituto Tecnológico Nacional de Tuxtla Gutiérrez y serán tratadas con absoluta confidencialidad y con fines meramente estadísticos.
                </p>
            </div>
        </div>
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
                                                <strong>Algo esta mal!</strong> anteriormente ya has llenado tú encuesta de seguimiento.
                                            </div>';
                                }
                    if (isset($_GET['mensaje']) && $_GET['mensaje'] == '3') {
                                    echo '<div class="alert alert-success">
                                                <strong>Muy bien!</strong> has guardado tú encuesta de seguimiento exitosamente.
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
        <!-- /.row -->
        <form action="../libs/guardarencuesta.php" method="POST">
        <div class="col-md8">
            <h3 class="page-header">Datos particulares</h3>
        </div>
            <div class="col-md-8">
                <div class="form-group">
                    <label><span class="required">*</span> Nombre (Apellido Paterno / Apellido Materno / Nombre[s]):</label>
                    <input type="text" class="form-control" required="required" name="question1" placeholder="Ingresa tú nombre (Apellido Paterno / Apellido Materno / Nombre[s])">
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <label><span class="required">*</span> Teléfono particular:</label>
                    <input type="text" class="form-control" required="required" name="question2" placeholder="Ingresa tú número.">
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <label><span class="required">*</span> Correo electrónico:</label>
                    <input type="email" class="form-control" required="required" name="question3" placeholder="Ingresa tú correo.">
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <label><span class="required">*</span> Página de Facebook o Twitter:</label>
                    <input type="text" class="form-control" required="required" name="question4" placeholder="Ingresa tú Facebook o Twitter.">
                </div>
            </div>
            <!--DATOS ACADÉMICOS-->
            <div class="col-md-8">
                <div class="form-group">
                    <label><span class="required">*</span> Fecha de egreso:</label>
                    <input type="date" class="form-control" name="question5" placeholder="Ingresa tú fecha de egreso.">
                </div>
            </div>
            <!--Titulado-->
            <div class="col-md-8">
                <div class="form-group">
                    <label><span class="required">*</span> Titulado:</label>
                    <select class="form-control" name="question6">
                                    <option>Si</option>
                                    <option>No</option>
                                    <option>En proceso</option>
                                    <option>Estudios adicionales a la carrera universitaria</option>
                    </select>
                </div>
            </div>
            <!--SITUACIÓN DEL LOS EGRESADOS EN EL MERCADO LABORAL-->
            <div class="col-md-8">
                <div class="form-group">
                    <label>¿Cuánto tiempo tardó en encontrar su primer empleo después de egresar?:</label>
                    <select class="form-control" name="question7">
                                    <option>Ya estaba trabajando</option>
                                    <option>Menos de un mes</option>
                                    <option>De 4 a 6 meses</option>
                                    <option>De 6 a 9 meses</option>
                                    <option>De 10 a 12 meses</option>
                                    <option>Aún no trabajo</option>
                    </select>
                </div>
            </div>
            <!--¿Por qué medio obtuvo su trabajo actual?:-->
            <div class="col-md-8">
                <div class="form-group">
                    <label>¿Por qué medio obtuvo su trabajo actual? (en caso de tener un empleo):</label>
                    <select class="form-control" name="question8">
                                    <option>Por prácticas profesionales</option>
                                    <option>Ferias de empleo</option>
                                    <option>Internet</option>
                                    <option>Agencias de empleo</option>
                                    <option>Creación de negocio propio</option>
                                    <option>Servicio social</option>
                    </select>
                </div>
            </div>
            <!--DATOS LABORALES-->
            <div class="col-md-8">
                <div class="form-group">
                    <label>Nombre de la empresa, institución u organización en que labora (en caso de tener un empleo):</label>
                    <input type="text" class="form-control" name="question9" placeholder="Ingresa nombre de empresa o institución.">
                </div>
            </div>
             <div class="col-md-8">
                <div class="form-group">
                    <label>Mencione el sector económico al que pertenece la empresa u organización en la que trabajas:</label>
                    <select class="form-control" name="question10">
                                    <option>Agropecuario</option>
                                    <option>Gobierno</option>
                                    <option>Salud</option>
                                    <option>Comercio</option>
                                    <option>Comunicaciones</option>
                                    <option>Transporte</option>
                                    <option>Educación</option>
                                    <option>Turismo</option>
                                    <option>Construcción</option>
                                    <option>Humanidades</option>
                    </select>
                </div>
                </div>
                <!--ARTICULACIÓN ENTRE LA FORMACIÓN Y EL TIPO DE EMPLEO-->
                <div class="col-md-8">
                <div class="form-group">
                    <label>¿Qué tan relacionado con sus estudios de licenciatura está el trabajo que actualmente desempeña?</label>
                    <select class="form-control" name="question11">
                                    <option>Muy relacionado</option>
                                    <option>Relacionado</option>
                                    <option>Medianamente relacionado</option>
                                    <option>Sin relación</option>
                    </select>
                </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                    <label><span class="required">*</span> La formación le permitió al egresado responder a las demandas de:</label>
                    <select class="form-control" name="question12">
                                    <option>Desarrollo de habilidades operacionales</option>
                                    <option>Toma de desiciones</option>
                                    <option>Iniciativa necesaria en su desempeño</option>
                    </select>
                </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                    <label><span class="required">*</span> En que área te desempeñas actualmente (No necesariamente en una empresa, puede ser el área en la que más te desarrollaste en el proceso Universitario):</label>
                    <select class="form-control" name="question13">
                                    <option>Desarrollo de software</option>
                                    <option>Bases de datos</option>
                                    <option>Electrónica</option>
                                    <option>Desarrollo movil</option>
                                    <option>Inteligencia de negocios</option>
                    </select>
                </div>
                </div>
                <!--De acuerdo al área en la que laboras cuales Herramientas tecnológicas son las mas usuales-->
                  <div class="col-md-8">
                    <div class="form-group">
                    <label><span class="required">*</span> De acuerdo al área en la que laboras o desempeñas tus habilidades cuales herramientas tecnológicas son las mas usuales</label>
                    <label>Desarrollo de software</label>
                    <select class="form-control" name="question14">
                                    <option>Java</option>
                                    <option>C#</option>
                                    <option>C++</option>
                                    <option>Visual Basic</option>
                                    <option>PHP</option>
                                    <option>Frameworks Javascript</option>
                    </select>
                </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                    <label>Infreastructura de redes</label>
                    <select class="form-control" name="question15">
                                    <option>Windows</option>
                                    <option>Linux</option>
                                    <option>Unix</option>
                                    <option>VMware</option>
                                    <option>Cisco</option>
                                    <option>Equipos UTM</option>
                    </select>
                </div>
                </div>
                 <div class="col-md-8">
                    <div class="form-group">
                    <label>Bases de datos</label>
                    <select class="form-control" name="question16">
                                    <option>MySQL</option>
                                    <option>PostgreSQL</option>
                                    <option>Oracle</option>
                                    <option>SQL Server</option>
                                    <option>DB2</option>
                    </select>
                </div>
                </div>
                 <div class="col-md-8">
                    <div class="form-group">
                    <label>Desarrollo móvil</label>
                    <select class="form-control" name="question17">
                                    <option>Android</option>
                                    <option>Windows Phone</option>
                                    <option>Iphone, Ipad</option>
                                    <option>Blackberry</option>
                    </select>
                </div>
                </div>
                 <div class="col-md-8">
                    <div class="form-group">
                    <label>Inteligencia de negocios</label>
                    <select class="form-control" name="question18">
                                    <option>SQL Server</option>
                                    <option>Oracle</option>
                                    <option>Cognos</option>
                                    <option>Hadoop</option>
                    </select>
                </div>
                </div>
                 <div class="col-md-8">
                    <div class="form-group">
                    <label>Electrónica</label>
                    <select class="form-control" name="question19">
                                    <option>PCL</option>
                                    <option>Microcontroladores</option>
                                    <option>Interfaces</option>
                                    <option>Control eléctrico</option>
                    </select>
                </div>
                </div>
                <div class="col-md-8">
                    <label>Comentarios y sugerencias</label>
                    <textarea class="form-control" rows="3" name="question20"></textarea>
                    <input type="hidden" name="user_id" value="<?php echo $_SESSION['idegresado'];?>">
                </div>
            <div class="col-md-8">
            <hr>
                <input type="submit" class="btn btn-primary">
            <hr>
            </div>
        </form>

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
