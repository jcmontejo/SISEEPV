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

    <title>Bolsa de Trabajo| SISEEPV</title>

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
                <a class="navbar-brand" href="/siseepv/empresas/home.php">INICIO</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="../empresas/egresados.php">Egresados</a>
                    </li>
                    <li>
                        <a href="../empresas/empresas.php">Empresas</a>
                    </li>
                    <li>
                        <a href="../empresas/proyectos_vinculados.php">Proyectos Vinculados</a>
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
                <img class="img-responsive" src="../images/1.jpg" alt="">
            </div>
        </div>-->
        <!-- /.row -->
    <hr>
    <div class="row">
        <div class="col-md-8">
         <div class="item form-group">
                <h3>Bolsa de Trabajo</h3>
                <br><br>
        </div>
        </div>
    </div>
    <div>
    
     <div class="panel-body">
        <div class="row">
            <div class="col-lg-18">
                <table class="table table-striped">
                    <thead>
                    <h4>Vacantes</h4>
                        <tr>
                            <td><strong>Puesto requerido</strong></td>
                            <td><strong>Tareas a Solicitar</strong></td>
                            <td><strong>Habilidades</strong></td>
                            <td><strong>Área</strong></td>
                            <td><strong>Salario</strong></td>
                            <td><strong>Contacto</strong></td>
                        </tr>
                    </thead>
                    <tbody>
                        <!--comenzazmos codigo php para realizar consultas-->
                        <?php 
                        include('../conexion/conexion.php');
                        $user_id = $_SESSION['idempresa'];
                        $resultado = $base->query("SELECT * FROM company WHERE user_id = $user_id");
                        $datos = $resultado->fetch();
                        $company_id = $datos['id'];
                        $consulta = $base->query("SELECT * FROM vacancy_request WHERE company_id= $company_id");
                            while ($campos = $consulta->fetch()){
                                echo "<tr>";
                                echo "<td>".$campos['require_position'];"<td>";
                                echo "<td>".$campos['task'];"<td>";
                                echo "<td>".$campos['habilities'];"<td>";
                                echo "<td>".$campos['area'];"<td>";
                                echo "<td>".$campos['salary'];"<td>";
                                echo "<td>".$campos['contact'];"<td>";
                                echo "<td><td>";
                            }
                         ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

     <div class="panel-body">
        <div class="row">
            <div class="col-lg-18">
                <table style="width:100%" class="table table-striped">
                    <thead>
                    <h4>Residentes</h4>
                        <tr>
                            <td><strong>Tareas a Realizar</strong></td>
                            <td><strong>Área</strong></td>
                            <td><strong>Dirección</strong></td>
                            <td><strong>Contacto</strong></td>


                        </tr>
                    </thead>
                    <tbody>
                        <!--comenzazmos codigo php para realizar consultas-->
                        <?php 
                        include('../conexion/conexion.php');
                        $user_id = $_SESSION['idempresa'];
                        $resultado = $base->query("SELECT * FROM company WHERE user_id = $user_id");
                        $datos = $resultado->fetch();
                        $company_id = $datos['id'];
                        $consulta = $base->query("SELECT * FROM professional_residence_request WHERE company_id= $company_id");
                            while ($campos = $consulta->fetch()){
                                echo "<tr>";
                                echo "<td>".$campos['task'];"<td>";
                                echo "<td>".$campos['area'];"<td>";
                                 echo "<td>".$campos['home'];"<td>";
                                echo "<td>".$campos['contact'];"<td>";
                                echo "<td><td>";
                            }
                         ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
 
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-18">
                <table style="width:100%" class="table table-striped">
                    <thead>
                    <h4>Servicio Social</h4>
                        <tr>
                            <td><strong>Tareas a Realizar</strong></td>
                            <td><strong>Área</strong></td>
                            <td><strong>Contacto</strong></td>


                        </tr>
                    </thead>
                    <tbody>
                        <!--comenzazmos codigo php para realizar consultas-->
                        <?php 
                        include('../conexion/conexion.php');
                        $user_id = $_SESSION['idempresa'];
                        $resultado = $base->query("SELECT * FROM company WHERE user_id = $user_id");
                        $datos = $resultado->fetch();
                        $company_id = $datos['id'];
                        $consulta = $base->query("SELECT * FROM social_service WHERE company_id= $company_id");
                            while ($campos = $consulta->fetch()){
                                echo "<tr>";
                                echo "<td>".$campos['task'];"<td>";
                                echo "<td>".$campos['area'];"<td>";
                                echo "<td>".$campos['contact'];"<td>";
                                echo "<td><td>";
                            }
                         ?>
                    </tbody>
                </table>
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
