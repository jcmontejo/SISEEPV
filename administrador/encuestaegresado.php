<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Administrador! | SISEEPV </title>

    <!-- Bootstrap core CSS -->

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="css/custom.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/maps/jquery-jvectormap-2.0.1.css" />
    <link href="css/icheck/flat/green.css" rel="stylesheet" />
    <link href="css/floatexamples.css" rel="stylesheet" type="text/css" />

    <script src="js/jquery.min.js"></script>
    <script src="js/nprogress.js"></script>
    <script>
        NProgress.start();
    </script>
    
    <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>


<body class="nav-md">

    <div class="container body">


        <div class="main_container">

            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">

                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.php" class="site_title"><i class="fa fa-terminal"></i> <span>Administrador sissepv!</span></a>
                    </div>
                    <div class="clearfix"></div>

                    <!-- menu prile quick info -->
                    <div class="profile">
                        <div class="profile_pic">
                            <img src="images/admin/cossio.jpg" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Bienvenida,</span>
                            <h2>Aida G. Cossio</h2>
                        </div>
                    </div>
                    <!-- /menu prile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <li><a href="index.php"><i class="fa fa-home"></i> Inicio</a>
                                </li>
                                <li><a href="crearusuario.php"><i class="fa fa-users"></i> Crear usuario</a>
                                </li>
                                <li><a href="index.php"><i class="fa fa-user"></i> Usuarios existentes</a>
                                </li>
                                <li><a><i class="fa fa-desktop"></i> Tipos de usuario <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="egresados.php">Egresados</a>
                                        </li>
                                        <li><a href="empresas.php">Empresas</a>
                                        </li>
                                        <li>
                                            <a href="docentes.php">Docentes</a>
                                        </li>
                                    </ul>
                                </li>
                                 <li><a><i class="fa fa-book"></i> Solicitudes <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="vacantes.php">Solicitud de Vacantes</a>
                                        </li>
                                        <li><a href="residentes.php">Solicitud de Residentes</a>
                                        </li>
                                        <li>
                                            <a href="servicio.php">Solicitud Servicio Social</a>
                                        </li>
                                    </ul>
                                </li>
                                  <li><a><i class="fa fa-archive"></i> Proyectos <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="proyectos.php">Todos los Proyectos</a>
                                        </li>
                                        <li><a href="arquitectura.php">Arquitectura de Cómputo</a>
                                        </li>
                                        <li>
                                            <a href="computacion.php">Computación Educativa</a>
                                        </li>
                                        <li>
                                            <a href="inteligencia.php">Inteligencia Artificial</a>
                                        </li>
                                        <li>
                                            <a href="tecnologias.php">Tecnologías de Información y Base de Datos</a>
                                        </li>
                                    </ul>
                                </li>
                                 <li><a><i class="fa fa-bar-chart"></i> Graficas estadisticas <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="grafegresados.php">Egresados</a>
                                        </li>
                                        <li>
                                            <a href="#">Empresas</a>
                                        </li>
                                        <li>
                                            <a href="graficasproyecto.php">Proyectos Vinculados</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!-- /sidebar menu -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">

                <div class="nav_menu">
                    <nav class="" role="navigation">
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <img src="images/admin/cossio.jpg" alt="">Aida G. Cossio
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                                    <li><a href="javascript:;">  Perfil</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">Ayuda</a>
                                    </li>
                                    <li><a href="cerrarsesionadmin.php"><i class="fa fa-sign-out pull-right"></i> Salir</a>
                                    </li>
                                </ul>
                            </li>
                            <?php 
                                include('conexion.php');
                                $cita = $base->query("SELECT * FROM cita");
                                $nc = $cita->rowCount();
                             ?>
                            <li role="presentation" class="dropdown">
                                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="badge bg-green"><?php echo $nc; ?></span>
                                </a>
                                <ul id="menu1" class="dropdown-menu list-unstyled msg_list animated fadeInDown" role="menu">
                                    <li>
                                        <div class="text-center">
                                            <a>
                                                <strong><a href="cita.php">Ver citas solicitadas</strong>
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </nav>
                </div>

            </div>
            <!-- /top navigation -->


            <!-- page content -->
            <div class="right_col" role="main">
                        <?php if (isset($_GET['egresado'])) {
                                $egresado = $_GET['egresado'];
                                    }
                            include('conexion.php');
                            /*Realizamos consulta sql*/
                            $personal = $base->query("SELECT * FROM graduate WHERE id = $egresado");
                            $datos = $personal->fetch();
                            $name = $datos['name'];
                            /*Realizamos consulta sql*/
                            $encuesta = $base->query("SELECT * FROM test WHERE graduate_id = $egresado");
                            
                        ?>
                
                    <div class="page-title">
                        <div class="title_left">
                            <h3>
                    Encuesta
                    <small>
                         perteneciente a <?php echo $name; ?>.
                    </small>
                            </h3>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                <div class="row">
                    
                    <div class="col-md-12 col-sm-6 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Encuesta de <small>seguimiento</small></h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <ul class="list-unstyled timeline">
                                <?php 
                                    while ($datos = $encuesta->fetch()) 
                                    {
                                        /*q1*/
                                        echo "
                                              <li>
                                        <div class=\"block\">
                                            <div class=\"tags\">
                                                <a href=\"\" class=\"tag\">
                                                    <span>Pregunta 1</span>
                                                </a>
                                            </div>
                                            <div class=\"block_content\">
                                                <h2 class=\"title\">
                                        <a>1. Nombre (Apellido Paterno / Apellido Materno / Nombre[s]):</a>
                                                </h2>
                                                <p class=\"excerpt\">".$datos['q1'];"
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                            
                                         ";
                                         /*q2*/
                                        echo "
                                              <li>
                                        <div class=\"block\">
                                            <div class=\"tags\">
                                                <a href=\"\" class=\"tag\">
                                                    <span>Pregunta 2</span>
                                                </a>
                                            </div>
                                            <div class=\"block_content\">
                                                <h2 class=\"title\">
                                        <a>2. Teléfono particular:</a>
                                                </h2>
                                                <p class=\"excerpt\">".$datos['q2'];"
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                            
                                         ";
                                         /*q3*/
                                        echo "
                                              <li>
                                        <div class=\"block\">
                                            <div class=\"tags\">
                                                <a href=\"\" class=\"tag\">
                                                    <span>Pregunta 3</span>
                                                </a>
                                            </div>
                                            <div class=\"block_content\">
                                                <h2 class=\"title\">
                                        <a>3. Correo electrónico:</a>
                                                </h2>
                                                <p class=\"excerpt\">".$datos['q3'];"
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                            
                                         ";
                                             /*q4*/
                                        echo "
                                              <li>
                                        <div class=\"block\">
                                            <div class=\"tags\">
                                                <a href=\"\" class=\"tag\">
                                                    <span>Pregunta 4</span>
                                                </a>
                                            </div>
                                            <div class=\"block_content\">
                                                <h2 class=\"title\">
                                        <a>4. Página de Facebook o Twitter:</a>
                                                </h2>
                                                <p class=\"excerpt\">".$datos['q4'];"
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                            
                                         ";
                                         /*q5*/
                                        echo "
                                              <li>
                                        <div class=\"block\">
                                            <div class=\"tags\">
                                                <a href=\"\" class=\"tag\">
                                                    <span>Pregunta 5</span>
                                                </a>
                                            </div>
                                            <div class=\"block_content\">
                                                <h2 class=\"title\">
                                        <a>5. Fecha de egreso:</a>
                                                </h2>
                                                <p class=\"excerpt\">".$datos['q5'];"
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                            
                                         ";
                                         /*q6*/
                                        echo "
                                              <li>
                                        <div class=\"block\">
                                            <div class=\"tags\">
                                                <a href=\"\" class=\"tag\">
                                                    <span>Pregunta 6</span>
                                                </a>
                                            </div>
                                            <div class=\"block_content\">
                                                <h2 class=\"title\">
                                        <a>6. Titulado:</a>
                                                </h2>
                                                <p class=\"excerpt\">".$datos['q6'];"
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                            
                                         ";
                                             /*q7*/
                                        echo "
                                              <li>
                                        <div class=\"block\">
                                            <div class=\"tags\">
                                                <a href=\"\" class=\"tag\">
                                                    <span>Pregunta 7</span>
                                                </a>
                                            </div>
                                            <div class=\"block_content\">
                                                <h2 class=\"title\">
                                        <a>7. ¿Cuánto tiempo tardó en encontrar su primer empleo después de egresar?:</a>
                                                </h2>
                                                <p class=\"excerpt\">".$datos['q7'];"
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                            
                                         ";
                                         /*q8*/
                                        echo "
                                              <li>
                                        <div class=\"block\">
                                            <div class=\"tags\">
                                                <a href=\"\" class=\"tag\">
                                                    <span>Pregunta 8</span>
                                                </a>
                                            </div>
                                            <div class=\"block_content\">
                                                <h2 class=\"title\">
                                        <a>8. ¿Por qué medio obtuvo su trabajo actual?:</a>
                                                </h2>
                                                <p class=\"excerpt\">".$datos['q8'];"
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                            
                                         ";
                                         /*q9*/
                                        echo "
                                              <li>
                                        <div class=\"block\">
                                            <div class=\"tags\">
                                                <a href=\"\" class=\"tag\">
                                                    <span>Pregunta 9</span>
                                                </a>
                                            </div>
                                            <div class=\"block_content\">
                                                <h2 class=\"title\">
                                        <a>9. Nombre de la empresa, institución u organización en que labora:</a>
                                                </h2>
                                                <p class=\"excerpt\">".$datos['q9'];"
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                            
                                         ";
                                       /*q10*/
                                        echo "
                                              <li>
                                        <div class=\"block\">
                                            <div class=\"tags\">
                                                <a href=\"\" class=\"tag\">
                                                    <span>Pregunta 11</span>
                                                </a>
                                            </div>
                                            <div class=\"block_content\">
                                                <h2 class=\"title\">
                                        <a>10. Mencione el sector económico al que pertenece la empresa u organización en la que trabajas:</a>
                                                </h2>
                                                <p class=\"excerpt\">".$datos['q10'];"
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                            
                                         ";
                                         /*q11*/
                                        echo "
                                              <li>
                                        <div class=\"block\">
                                            <div class=\"tags\">
                                                <a href=\"\" class=\"tag\">
                                                    <span>Pregunta 11</span>
                                                </a>
                                            </div>
                                            <div class=\"block_content\">
                                                <h2 class=\"title\">
                                        <a>11. ¿Qué tan relacionado con sus estudios de licenciatura está el trabajo que actualmente desempeña?</a>
                                                </h2>
                                                <p class=\"excerpt\">".$datos['q11'];"
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                            
                                         ";
                                         /*q12*/
                                        echo "
                                              <li>
                                        <div class=\"block\">
                                            <div class=\"tags\">
                                                <a href=\"\" class=\"tag\">
                                                    <span>Pregunta 12</span>
                                                </a>
                                            </div>
                                            <div class=\"block_content\">
                                                <h2 class=\"title\">
                                        <a>12. La formación le permitió al egresado responder a las demandas de:</a>
                                                </h2>
                                                <p class=\"excerpt\">".$datos['q12'];"
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                            
                                         ";
                                             /*q13*/
                                        echo "
                                              <li>
                                        <div class=\"block\">
                                            <div class=\"tags\">
                                                <a href=\"\" class=\"tag\">
                                                    <span>Pregunta 13</span>
                                                </a>
                                            </div>
                                            <div class=\"block_content\">
                                                <h2 class=\"title\">
                                        <a>13. En que área te desempeñas actualmente:</a>
                                                </h2>
                                                <p class=\"excerpt\">".$datos['q13'];"
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                            
                                         ";
                                         /*q14*/
                                        echo "
                                              <li>
                                        <div class=\"block\">
                                            <div class=\"tags\">
                                                <a href=\"\" class=\"tag\">
                                                    <span>Pregunta 14</span>
                                                </a>
                                            </div>
                                            <div class=\"block_content\">
                                                <h2 class=\"title\">
                                        <a>14. Desarrollo de software</a>
                                                </h2>
                                                <p class=\"excerpt\">".$datos['q14'];"
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                            
                                         ";
                                         /*q15*/
                                        echo "
                                              <li>
                                        <div class=\"block\">
                                            <div class=\"tags\">
                                                <a href=\"\" class=\"tag\">
                                                    <span>Pregunta 15</span>
                                                </a>
                                            </div>
                                            <div class=\"block_content\">
                                                <h2 class=\"title\">
                                        <a>15. Infreastructura de redes</a>
                                                </h2>
                                                <p class=\"excerpt\">".$datos['q15'];"
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                            
                                         ";
                                             /*q16*/
                                        echo "
                                              <li>
                                        <div class=\"block\">
                                            <div class=\"tags\">
                                                <a href=\"\" class=\"tag\">
                                                    <span>Pregunta 16</span>
                                                </a>
                                            </div>
                                            <div class=\"block_content\">
                                                <h2 class=\"title\">
                                        <a>16. Bases de datos</a>
                                                </h2>
                                                <p class=\"excerpt\">".$datos['q16'];"
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                            
                                         ";
                                         /*q17*/
                                        echo "
                                              <li>
                                        <div class=\"block\">
                                            <div class=\"tags\">
                                                <a href=\"\" class=\"tag\">
                                                    <span>Pregunta 17</span>
                                                </a>
                                            </div>
                                            <div class=\"block_content\">
                                                <h2 class=\"title\">
                                        <a>17. Desarrollo móvil</a>
                                                </h2>
                                                <p class=\"excerpt\">".$datos['q17'];"
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                            
                                         ";
                                         /*q18*/
                                        echo "
                                              <li>
                                        <div class=\"block\">
                                            <div class=\"tags\">
                                                <a href=\"\" class=\"tag\">
                                                    <span>Pregunta 18</span>
                                                </a>
                                            </div>
                                            <div class=\"block_content\">
                                                <h2 class=\"title\">
                                        <a>18. Inteligencia de negocios</a>
                                                </h2>
                                                <p class=\"excerpt\">".$datos['q18'];"
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                            
                                         ";
                                            /*q19*/
                                        echo "
                                              <li>
                                        <div class=\"block\">
                                            <div class=\"tags\">
                                                <a href=\"\" class=\"tag\">
                                                    <span>Pregunta 19</span>
                                                </a>
                                            </div>
                                            <div class=\"block_content\">
                                                <h2 class=\"title\">
                                        <a>19. Electrónica</a>
                                                </h2>
                                                <p class=\"excerpt\">".$datos['q19'];"
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                            
                                         ";
                                         /*q20*/
                                        echo "
                                              <li>
                                        <div class=\"block\">
                                            <div class=\"tags\">
                                                <a href=\"\" class=\"tag\">
                                                    <span>Pregunta 20</span>
                                                </a>
                                            </div>
                                            <div class=\"block_content\">
                                                <h2 class=\"title\">
                                        <a>20. Comentarios y sugerencias</a>
                                                </h2>
                                                <p class=\"excerpt\">".$datos['q20'];"
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                            
                                         ";
                                    }
                                 ?>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
             

                <div class="row">
                     <!-- this row will not appear when printing -->
                                        <div class="row no-print">
                                            <div class="col-xs-12">
                                                <button class="btn btn-danger" onclick="window.print();"><i class="fa fa-file-pdf-o"></i> Generar PDF</button>
                                            </div>
                                        </div>
                    
                </div>


              

                <!-- footer content -->

                <footer>
                    <div class="">
                        <p class="pull-right">Administrador SISEEPV por<a> ittg</a>. |
                            <span class="lead"> <i class="fa fa-terminal"></i> Admin siseepv!</span>
                        </p>
                    </div>
                    <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->
            </div>
            <!-- /page content -->

        </div>

    </div>

    <div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>

    <script src="js/bootstrap.min.js"></script>

    <!-- gauge js -->
    <script type="text/javascript" src="js/gauge/gauge.min.js"></script>
    <script type="text/javascript" src="js/gauge/gauge_demo.js"></script>
    <!-- chart js -->
    <script src="js/chartjs/chart.min.js"></script>
    <!-- bootstrap progress js -->
    <script src="js/progressbar/bootstrap-progressbar.min.js"></script>
    <script src="js/nicescroll/jquery.nicescroll.min.js"></script>
    <!-- icheck -->
    <script src="js/icheck/icheck.min.js"></script>
    <!-- daterangepicker -->
    <script type="text/javascript" src="js/moment.min.js"></script>
    <script type="text/javascript" src="js/datepicker/daterangepicker.js"></script>

    <script src="js/custom.js"></script>

    <!-- flot js -->
    <!--[if lte IE 8]><script type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->
    <script type="text/javascript" src="js/flot/jquery.flot.js"></script>
    <script type="text/javascript" src="js/flot/jquery.flot.pie.js"></script>
    <script type="text/javascript" src="js/flot/jquery.flot.orderBars.js"></script>
    <script type="text/javascript" src="js/flot/jquery.flot.time.min.js"></script>
    <script type="text/javascript" src="js/flot/date.js"></script>
    <script type="text/javascript" src="js/flot/jquery.flot.spline.js"></script>
    <script type="text/javascript" src="js/flot/jquery.flot.stack.js"></script>
    <script type="text/javascript" src="js/flot/curvedLines.js"></script>
    <script type="text/javascript" src="js/flot/jquery.flot.resize.js"></script>
    <script>
        $(document).ready(function () {
            // [17, 74, 6, 39, 20, 85, 7]
            //[82, 23, 66, 9, 99, 6, 2]
            var data1 = [[gd(2012, 1, 1), 17], [gd(2012, 1, 2), 74], [gd(2012, 1, 3), 6], [gd(2012, 1, 4), 39], [gd(2012, 1, 5), 20], [gd(2012, 1, 6), 85], [gd(2012, 1, 7), 7]];

            var data2 = [[gd(2012, 1, 1), 82], [gd(2012, 1, 2), 23], [gd(2012, 1, 3), 66], [gd(2012, 1, 4), 9], [gd(2012, 1, 5), 119], [gd(2012, 1, 6), 6], [gd(2012, 1, 7), 9]];
            $("#canvas_dahs").length && $.plot($("#canvas_dahs"), [
                data1, data2
            ], {
                series: {
                    lines: {
                        show: false,
                        fill: true
                    },
                    splines: {
                        show: true,
                        tension: 0.4,
                        lineWidth: 1,
                        fill: 0.4
                    },
                    points: {
                        radius: 0,
                        show: true
                    },
                    shadowSize: 2
                },
                grid: {
                    verticalLines: true,
                    hoverable: true,
                    clickable: true,
                    tickColor: "#d5d5d5",
                    borderWidth: 1,
                    color: '#fff'
                },
                colors: ["rgba(38, 185, 154, 0.38)", "rgba(3, 88, 106, 0.38)"],
                xaxis: {
                    tickColor: "rgba(51, 51, 51, 0.06)",
                    mode: "time",
                    tickSize: [1, "day"],
                    //tickLength: 10,
                    axisLabel: "Date",
                    axisLabelUseCanvas: true,
                    axisLabelFontSizePixels: 12,
                    axisLabelFontFamily: 'Verdana, Arial',
                    axisLabelPadding: 10
                        //mode: "time", timeformat: "%m/%d/%y", minTickSize: [1, "day"]
                },
                yaxis: {
                    ticks: 8,
                    tickColor: "rgba(51, 51, 51, 0.06)",
                },
                tooltip: false
            });

            function gd(year, month, day) {
                return new Date(year, month - 1, day).getTime();
            }
        });
    </script>

    <!-- worldmap -->
    <script type="text/javascript" src="js/maps/jquery-jvectormap-2.0.1.min.js"></script>
    <script type="text/javascript" src="js/maps/gdp-data.js"></script>
    <script type="text/javascript" src="js/maps/jquery-jvectormap-world-mill-en.js"></script>
    <script type="text/javascript" src="js/maps/jquery-jvectormap-us-aea-en.js"></script>
    <script>
        $(function () {
            $('#world-map-gdp').vectorMap({
                map: 'world_mill_en',
                backgroundColor: 'transparent',
                zoomOnScroll: false,
                series: {
                    regions: [{
                        values: gdpData,
                        scale: ['#E6F2F0', '#149B7E'],
                        normalizeFunction: 'polynomial'
                    }]
                },
                onRegionTipShow: function (e, el, code) {
                    el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
                }
            });
        });
    </script>
    <!-- skycons -->
    <script src="js/skycons/skycons.js"></script>
    <script>
        var icons = new Skycons({
                "color": "#73879C"
            }),
            list = [
                "clear-day", "clear-night", "partly-cloudy-day",
                "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                "fog"
            ],
            i;

        for (i = list.length; i--;)
            icons.set(list[i], list[i]);

        icons.play();
    </script>

    <!-- dashbord linegraph -->
    <script>
        var doughnutData = [
            {
                value: 30,
                color: "#455C73"
            },
            {
                value: 30,
                color: "#9B59B6"
            },
            {
                value: 60,
                color: "#BDC3C7"
            },
            {
                value: 100,
                color: "#26B99A"
            },
            {
                value: 120,
                color: "#3498DB"
            }
    ];
        var myDoughnut = new Chart(document.getElementById("canvas1").getContext("2d")).Doughnut(doughnutData);
    </script>
    <!-- /dashbord linegraph -->
    <!-- datepicker -->
    <script type="text/javascript">
        $(document).ready(function () {

            var cb = function (start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                //alert("Callback has fired: [" + start.format('MMMM D, YYYY') + " to " + end.format('MMMM D, YYYY') + ", label = " + label + "]");
            }

            var optionSet1 = {
                startDate: moment().subtract(29, 'days'),
                endDate: moment(),
                minDate: '01/01/2012',
                maxDate: '12/31/2015',
                dateLimit: {
                    days: 60
                },
                showDropdowns: true,
                showWeekNumbers: true,
                timePicker: false,
                timePickerIncrement: 1,
                timePicker12Hour: true,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                opens: 'left',
                buttonClasses: ['btn btn-default'],
                applyClass: 'btn-small btn-primary',
                cancelClass: 'btn-small',
                format: 'MM/DD/YYYY',
                separator: ' to ',
                locale: {
                    applyLabel: 'Submit',
                    cancelLabel: 'Clear',
                    fromLabel: 'From',
                    toLabel: 'To',
                    customRangeLabel: 'Custom',
                    daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                    monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    firstDay: 1
                }
            };
            $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
            $('#reportrange').daterangepicker(optionSet1, cb);
            $('#reportrange').on('show.daterangepicker', function () {
                console.log("show event fired");
            });
            $('#reportrange').on('hide.daterangepicker', function () {
                console.log("hide event fired");
            });
            $('#reportrange').on('apply.daterangepicker', function (ev, picker) {
                console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
            });
            $('#reportrange').on('cancel.daterangepicker', function (ev, picker) {
                console.log("cancel event fired");
            });
            $('#options1').click(function () {
                $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
            });
            $('#options2').click(function () {
                $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
            });
            $('#destroy').click(function () {
                $('#reportrange').data('daterangepicker').remove();
            });
        });
    </script>
    <script>
        NProgress.done();
    </script>
    <!-- /datepicker -->
    <!-- /footer content -->
</body>

</html>
